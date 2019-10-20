<template>
    <div>
        <div class="modal fade addFaqModal" tabindex="-1" role="dialog" ref="addFaqModal" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Create Faq</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body m-t-35">
                        <form name="faq" method="post" class="form-horizontal login_validator" id="form_inline_validator">
                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="service" class="col-form-label">Service *</label>
                                </div>
                                <div class="col-xl-9">
                                    <select class="form-control chzn-select" name="service" id="service" tabindex="2" v-model="service">
                                        <option disabled selected>Choose Your Service</option>
                                        <option value="App\GeneralFaq">GeneralFaq</option>
                                        <option value="App\ForexSignalFaq">ForexSignalFaq</option>
                                        <option value="App\CopyTrade">CopyTrade</option>
                                        <option value="App\FundManagement">FundManagement</option>
                                    </select>
                                    <small class="text-danger" v-text="serviceError"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="question" class="col-form-label">Question *</label>
                                </div>
                                <div class="col-xl-9">
                                    <input type="text" id="question" name="question" v-model="question" placeholder="Enter Your Faq Question...." class="form-control">
                                    <small class="text-danger" v-text="questionError"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-3 text-xl-right">
                                    <label for="answer" class="col-form-label">Answer *</label>
                                </div>
                                <div class="col-xl-9">
                                    <textarea type="text" id="answer" row="5" name="answer" v-model="answer" placeholder="Enter Your Faq Answer...." class="form-control"></textarea>
                                    <small class="text-danger" v-text="answerError"></small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" @click="save()">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                service: '',
                question: '',
                answer: '',
                errorCount: 0,
                serviceError: '',
                questionError: '',
                answerError: '',
                
            }
        },
        methods: {
            resetError () {
                this.errorCount = 0
                this.serviceError =''
                this.questionError = ''
                this.answerError = ''
            },
            save () {
                this.resetError()

                // validation
                // check service length
                if (this.service.length === 0) {
                    this.serviceError = 'Service field is required'
                    this.errorCount++
                }

                // validation
                // check question length
                if (this.question.length === 0) {
                    this.questionError = 'Question field is required'
                    this.errorCount++
                }

                // validation
                // check answer length
                if (this.answer.length === 0) {
                    this.answerError = 'Answer field is required'
                    this.errorCount++
                }

                axios.post('/admin/faq/save', {
                    service: this.service,
                    question: this.question,
                    answer: this.answer,
                   
                })
                .then((response) => {
                    if (response.status === 201) {
                        this.service = '',
                        this.question = '',
                        this.answer = '',
                        $('.addFaqModal').modal('hide')
                        location.reload(true);
                        // this.$refs.addFaqModal.setAttribute('style', 'display: none')
                    } else {
                        alert('Something went wrong!')
                    }
                    
                })
                .catch((error) => {
                    console.log(error)
                })
            }
        }
    }
</script>