<template>
    <div>
        <div class="modal fade addPackageModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Create Package</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body m-t-35">
                        <form name="packages" method="post" class="form-horizontal login_validator" id="form_inline_validator">
                            
                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="title" class="col-form-label">Title *</label>
                                </div>
                                <div class="col-xl-9">
                                    <input type="text" id="title" name="title" placeholder="Enter Your Package Title...." class="form-control" v-model="title">
                                    <small class="text-danger" v-text="titleError"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="service" class="col-form-label">Service *</label>
                                </div>
                                <div class="col-xl-9">
                                    <select class="form-control chzn-select" name="service" id="service" tabindex="2" v-model="service">
                                        <option disabled selected>Choose Your Service</option>
                                        <option value="App/FundManagement">FundManagement</option>
                                        <option value="App/CopyTrade">CopyTrade</option>
                                        <option value="App/ForexConsultancy">ForexConsultancy</option>
                                        <option value="App/ForexSignalPackage">ForexSignalPackage</option>
                                    </select>
                                    <small class="text-danger" v-text="serviceError"></small>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="duration" class="col-form-label">Duration *</label>
                                </div>
                                <div class="col-xl-9">
                                    <select class="form-control chzn-select" name="duration" id="duration" tabindex="2" v-model="duration">
                                        <option disabled selected>Choose Your Package Duration</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="yearly">Yearly</option>
                                    </select>
                                    <small class="text-danger" v-text="durationError"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="price" class="col-form-label">Price *</label>
                                </div>
                                <div class="col-xl-9">
                                    <input type="number" id="price" name="price" data-error-target="#price_error" v-model="price" placeholder="Enter Your Package Price...." class="form-control">
                                    <small class="text-danger" v-text="priceError"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="orders" class="col-form-label">Order *</label>
                                </div>
                                <div class="col-xl-9">
                                    <input type="number" id="orders" name="orders" data-error-target="#orders_error" v-model="orders" placeholder="Enter Your Order Number...." class="form-control">
                                    <small class="text-danger" v-text="ordersError"></small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="icon" class="col-form-label">Icon *</label>
                                </div>
                                <div class="col-xl-9">
                                    <input type="text" id="icon" name="icon" data-error-target="#icon_error" v-model="icon" placeholder="Enter Your Icon Class Name...." class="form-control">
                                    <small class="text-danger" v-text="iconError"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="feature_details" class="col-form-label">Feature Details</label>
                                </div>
                                <div class="col-xl-9">
                                    <featureDetail  v-for="n in keyValuePairCount" :key="n" @update-key="updateKey" @update-value="updateValue" />
                                    <small class="text-danger" v-text="detailsError"></small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="feature_details" class="col-form-label"></label>
                                </div>
                                <div class="col-xl-9 cursor-pointer text-underline" @click="appendNewKeyValuePair">
                                    <i class="fa fa-plus-square-o"></i> Add New Key/ value pair
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" @click="adminPackageSave()">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import featureDetail from './KeyValuePairInput.vue'
    export default {
        data () {
            return {
                keyValuePairCount: 1,
                title: '',
                service: '',
                duration: '',
                price: '',
                orders: '',
                icon: '',
                errorCount: 0,
                titleError: '',
                serviceError: '',
                durationError: '',
                priceError: '',
                ordersError: '',
                iconError: '',
                detailsError: '',
                details: [
                    {
                        key: '',
                        value: ''
                    }
                ],
                
            }
            
        },
        components: { featureDetail },
        methods: {
            resetError () {
                this.errorCount = 0
                this.titleError =''
                this.serviceError = ''
                this.durationError = ''
                this.priceError = ''
                this.ordersError = ''
                this.iconError = ''
                this.detailsError = ''
            },
            appendNewKeyValuePair() {
                this.details.push({
                        key: '',
                        value: ''
                    })
                this.keyValuePairCount++
            },
            adminPackageSave () {

                this.resetError()

                // validation
                // check Title length
                if (this.title.length === 0) {
                    this.titleError = 'Title field is required'
                    this.errorCount++
                }

                // validation
                // check Service length
                if (this.service.length === 0) {
                    this.serviceError = 'Service field is required'
                    this.errorCount++
                }

                // validation
                // check duration length
                if (this.duration.length === 0) {
                    this.durationError = 'Duration field is required'
                    this.errorCount++
                }

                // validation
                // check price length
                if (this.price.length === 0) {
                    this.priceError = 'price field is required'
                    this.errorCount++
                }

                // validation
                // check order length
                if (this.orders.length === 0) {
                    this.ordersError = 'Orders field is required'
                    this.errorCount++
                }

                // validation
                // check icon length
                if (this.icon.length === 0) {
                    this.iconError = 'Icon field is required'
                    this.errorCount++
                }

                // validation
                // check details length
                if (this.details.length === 0) {
                    this.detailsError = 'Details field is required'
                    this.errorCount++
                }

                axios.post('/admin/package/save', {
                    title: this.title,
                    service: this.service,
                    duration: this.duration,
                    price: this.price,
                    orders: this.orders,
                    icon: this.icon,
                    details: JSON.stringify(this.details),
                   
                    
                })
                .then((response) => {
                    if (response.status === 200) {
                        this.title = ''
                        this.service = ''
                        this.duration = ''
                        this.price = ''
                        this.details = ''
                        this.orders = ''
                        this.icon = ''
                        $('.addPackageModal').modal('hide')
                        location.reload(true);
                        // this.$refs.addFaqModal.setAttribute('style', 'display: none')
                    } else {
                        alert('Something went wrong!')
                    }
                    
                })
                .catch((error) => {
                    console.log(error)
                })
            },
            updateKey (payload1, payload2) {
                this.details[payload2 - 1].key = payload1
                
            },

            updateValue (payload1, payload2) {
                this.details[payload2 - 1].value = payload1
            }

            
        }
    }
</script>