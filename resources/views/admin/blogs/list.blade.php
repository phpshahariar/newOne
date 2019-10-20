@extends('admin.layouts.default')

@section('title')
    Blogs
@endsection

@section('header_styles')
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/inputlimiter/css/jquery.inputlimiter.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/vendors/chosen/css/chosen.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables/css/scroller.bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables/css/colReorder.bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/pages/dataTables.bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/plugincss/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/tooltipster/css/tooltipster.bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/tipso/css/tipso.min.css') }}">
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link rel="stylesheet" href="{{ asset('/admin/css/pages/tables.css') }}" />
    <style>
        .badge-active { background: #00bf86 }
        .badge-inactive { background: #727b84 }
        .badge-publish { background: #00c0ef }
        .badge-editing {  }
        .badge-trash { background: #ff8086 }
        .x-90 {
            transform: rotate(-90deg);
            letter-spacing: 2px;
            text-transform: capitalize;
            border-radius: 4px;
        }
    </style>
@endsection

@section('footer_scripts')
    <script src="{{ asset('admin/vendors/select2/js/select2.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/js/pluginjs/dataTables.tableTools.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/dataTables.colReorder.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/js/pluginjs/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/dataTables.rowReorder.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatables/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/inputlimiter/js/jquery.inputlimiter.js') }}"></script>
    <script src="{{ asset('admin/vendors/chosen/js/chosen.jquery.min.js') }}"></script>
    <!-- end of plugin scripts -->
    <!--Page level scripts-->
    <script src="{{ asset('admin/js/pages/datatable.js') }}"></script>
    <script src="{{ asset('admin/vendors/tooltipster/js/tooltipster.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/tipso/js/tipso.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/tooltips.js') }}"></script>
@endsection

@section('content')
<div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row">
                    <div class="col-lg col-sm-5 col-md-12 col-12">
                        <h4 class="nav_top_align">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            Dashboard
                        </h4>
                    </div>
                    <div class="col-lg col-sm-7 col-md-12 col-12">
                        <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <i class="fa fa-file-text"></i>
                                Blogs
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer" id="app">
            <div class="inner bg-container">
                <div class="row">
                    <div class="col-12 data_tables">
                        <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                        @if(Session::get('message'))
                        <p class="alert alert-success">{{Session::get('message')}}</p>
                        @endif
                        <div class="card">
                            <div class="card-header bg-white">
                                <i class="fa fa-table"></i> Blogs Table
                                <button type="button" data-toggle="modal" data-target=".addBlogModal" class="btn btn-success pull-right" title="Add Blog">
                                    Add Blog
                                </button>
                            </div>

                            <div class="card-body p-t-25">
                                <div class="">
                                    <div class="pull-sm-right">
                                        <div class="tools pull-sm-right"></div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                        <tr style="text-align:center">
                                            <th>SL</th>
                                            <th>Category name</th>
                                            <th>Title</th>
                                            <th>Body</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>

                                            @foreach($blogs as $key=> $blog)
                                          
                                            <tr>
                                            <td>{{$key+1}}</td>
                                            <td>
                                                {{ $blog->category ? $blog->category->name : '' }}
                                            </td>
                                            <td>
                                                <p>{{ $blog->title }}</p>
                                                <img src="{{ $blog->feature_image }}" style="height: 50px;" width="100px">
                                                <span class="badge badge-pill badge-{{ $blog->status }} float-right x-90">{{ $blog->status }}</span>
                                            </td>
                                            <td>{{ substr($blog->body,0,80) }}...</td>
                                            <td style="text-align:center">
                                                <!--  -->
                                                @if( $blog->status == 'inactive' )
                                                <a href="{{ url('admin/blog/edit') }}" data-id="{!! $blog->id !!}" class="btn btn-warning tipso m-t-20 edit" data-background="#ffa000" data-tipso="Click to edit" data-position="bottom">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('admin/blog/' . $blog->id . '/active') }}" data-background="#00bf86" data-tipso="Click to activate" data-position="bottom" class="btn btn-success tipso m-t-20"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('active-form-{{ $blog->id }}').submit();">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <form id="active-form-{{ $blog->id }}" action="{{ url('admin/blog/' . $blog->id . '/active') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                <a href="{{ url('admin/blog/' . $blog->id . '/delete') }}" class="btn btn-danger tipso m-t-20" data-background="#ff8086" data-tipso="Click to delete" data-position="bottom"
                                                        onclick="event.preventDefault();
                                                        if (confirm('Are You sure you want to delete this!')) {
                                                            document.getElementById('delete-form-{{ $blog->id }}').submit();
                                                        }">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <form id="delete-form-{{ $blog->id }}" action="{{ url('admin/blog/' . $blog->id . '/delete') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                @elseif($blog->status == 'active')
                                                <a href="{{ url('admin/blog/' . $blog->id . '/publish') }}" class="btn btn-primary tipso m-t-20" data-background="#00c0ef" data-tipso="Click to publish" data-position="bottom"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('publish-form-{{ $blog->id }}').submit();">
                                                    <i class="fa fa-globe"></i>
                                                </a>
                                                <form id="publish-form-{{ $blog->id }}" action="{{ url('admin/blog/' . $blog->id . '/publish') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                <a href="{{ url('admin/blog/' . $blog->id . '/inactive') }}" class="btn btn-secondary tipso m-t-20" data-background="#727b84" data-tipso="Click to inactive" data-position="bottom"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('inactive-form-{{ $blog->id }}').submit();">
                                                    <i class="fa fa-star-o"></i>
                                                </a>
                                                <form id="inactive-form-{{ $blog->id }}" action="{{ url('admin/blog/' . $blog->id . '/inactive') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                @elseif($blog->status == 'publish')
                                                <a href="{{ url('admin/blog/' . $blog->id . '/active') }}" class="btn btn-success tipso m-t-20" data-background="#00bf86" data-tipso="Click to unpublish" data-position="bottom"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('active-form-{{ $blog->id }}').submit();">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <form id="active-form-{{ $blog->id }}" action="{{ url('admin/blog/' . $blog->id . '/active') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            
                                                @endif
                                                <!--  -->
                                            </td>
                                        </tr>

                                        @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.inner -->
        </div>
</div>

{{--    Add Blog Modal--}}
<div class="modal fade addBlogModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Blog Modal</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body m-t-35">
                <form action="{{ url('admin/blog') }}" method="post" name="blog" onsubmit="return validation();" class="form-horizontal login_validator" id="form_inline_validator" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            <label for="category" class="col-form-label">Category Name *</label>
                        </div>
                        <div class="col-xl-9">
                            <select class="form-control chzn-select" required name="category" id="category" tabindex="2">
                                <option></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                <div id="categoryValidation" style="color: red;"></div>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            <label for="subcategory" class="col-form-label">Sub Category Name *</label>
                        </div>
                        <div class="col-xl-9">
                            <select class="form-control chzn-select" required name="subcategory" id="subcategory" tabindex="2">
                                <option></option>
                                <div id="subcategoryValidation" style="color: red;"></div>
                            </select>
                        
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            <label for="title" class="col-form-label">Title *</label>
                        </div>
                        <div class="col-xl-9">
                            <input type="text" id="title" required name="title" placeholder="Enter Your Blog Title...." class="form-control">
                            <div id="titleValidation" style="color: red;"></div>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            <label for="body" class="col-form-label">Body</label>
                        </div>
                        <div class="col-xl-9">
                            <textarea id="body" name="body" required class="form-control" cols="50" rows="5" placeholder="Enter Your Blog Description...."></textarea>
                            <div id="bodyValidation" style="color: red;"></div>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            <label for="image" class="col-form-label">Blog Image *</label>
                        </div>
                        <div class="col-xl-9">
                            <input type="file" id="image" name="feature_image" accept="image/*" class="form-control">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--    End Blog Modal--}}

{{--    Start Edit Blog Modal--}}
<div class="modal fade editBlogModal" id="updateBlogModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Blog Edit</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body m-t-35">
                <form action="{{ url('admin/blog/update') }}" method="post"  class="form-horizontal login_validator updateBlogModal" id="form_inline_validator" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="blogId" name="id">
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            <label for="required" class="col-form-label">Category Name *</label>
                        </div>
                        <div class="col-xl-9">
                            <select class="form-control chzn-select" required name="category_id" id="ecategory" tabindex="2">
                                <option></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <div id="category" style="color: red;"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            <label for="required" class="col-form-label">Sub Category Name *</label>
                        </div>
                        <div class="col-xl-9">
                            <select class="form-control chzn-select" required name="subcategory" id="esubcategory" tabindex="2">
                                <option></option>
                            </select>
                            <div id="subcategory" style="color: red;"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            <label for="required" class="col-form-label">Title *</label>
                        </div>
                        <div class="col-xl-9">
                            <input type="text" id="etitle" required name="title" placeholder="Enter Your Blog Title...." class="form-control">
                            <div id="title" style="color: red;"></div>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            <label for="email" class="col-form-label">Body</label>
                        </div>
                        <div class="col-xl-9">
                            <textarea id="ebody" name="body" required class="form-control" cols="50" rows="5" placeholder="Enter Your Blog Description...."></textarea>
                            <div id="body" style="color: red;"></div>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-xl-3 text-xl-right">
                            <label for="image" class="col-form-label">Blog Image *</label>
                        </div>
                        <div class="col-xl-9">
                            <input type="file" id="image" name="feature_image" accept="image/*" class="form-control">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--    End Edit Blog Modal--}}


<script type="text/javascript">
        function validation() {
            var category            = document.blog.category;
            var subCategory         = document.blog.subcategory;
            var title               = document.blog.title;
            var body                = document.blog.body;

            if (category.selectedIndex < 1){
                document.getElementById("categoryValidation").innerHTML = "Please Select your Category name...";
                return false;
            }

            if (subCategory.selectedIndex < 1){
                document.getElementById("subcategoryValidation").innerHTML = "Please Select your SubCategory name...";
                return false;
            }

            if (title.value ==""){
                document.getElementById("titleValidation").innerHTML = "Please Enter Your Title...";
                return false;
            }

            if (body.value ==""){
                document.getElementById("bodyValidation").innerHTML = "Please Enter Your Some text here...";
                return false;
            }
        }
</script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
    $(document).ready(function () {
        $("#category").on('change', function () {
            var category = $("#category").val();
            var opt = "";
            $.ajax({
                url:"{{ url('/admin/sub-category') }}/" + category,
                success:function (response) {
                    opt += "<option></option>";
                    for (var i = 0; i <= response.length - 1; i++){
                        opt += "<option value='"+ response[i].id +"'>"+ response[i].name +"</option>";
                    }
                    $("#subcategory").html(opt);
                }
            });
        });

        //ajax Blog editing script

        $(document).on('click', '.edit', function(e){
            e.preventDefault();
            var id = $(this).data('id');
            var url = $(this).attr('href')
            

            $.ajax({
                   url:url,
                   data:{id:id},
                   type:"GET",
                   dataType:"JSON",
                   success(response){
                    $("#updateBlogModal").modal("show");
                    $("#etitle").val(response.title);
                    $("#ebody").val(response.body);
                    $("#blogId").val(response.id);

                    if (response.category.parent.parent_id) {
                        // sub category
                        // select category
                        $("#ecategory").val(response.category.parent.parent_id);

                        // fetch sub category
                        var opt = "";
                        $.ajax({
                            url:"{{ url('/admin/sub-category') }}/" + response.category.parent.parent_id,
                            success:function (res) {
                                opt += "<option>Select Sub Category</option>";
                                for (var i = 0; i <= res.length - 1; i++){
                                    opt += "<option value='"+ res[i].id +"'>"+ res[i].name +"</option>";
                                }
                                $("#esubcategory").html(opt);

                                // select subcategory
                                $("#esubcategory").val(response.category.id)
                            }
                        });
                        
                    } else {
                        // category selected
                        $("#ecategory").val(response.category.id);

                        // fetch sub category
                        var opt = "";
                        $.ajax({
                            url:"{{ url('/admin/sub-category') }}/" + response.category.id,
                            success:function (response) {
                                opt += "<option>Select Sub Category</option>";
                                for (var i = 0; i <= response.length - 1; i++){
                                    opt += "<option value='"+ response[i].id +"'>"+ response[i].name +"</option>";
                                }
                                $("#esubcategory").html(opt);
                            }
                        });

                    }
                    
                }
               });
        });

        //Blog update work

        $(".updateBlogModal").on("submit", function (e){
            e.preventDefault();
            var form = $(this);
            var url = form.attr("action");
            var type = form.attr("method");
            var data = form.serialize();
            

            $.ajax({
                url:url,
                type:type,
                data:data,
                dataType: "JSON",
                success(response){
                    $("#updateBlogModal").modal("hide");
                    location.reload(true);
                },
                
            });

        });
    });
</script>


@endsection

