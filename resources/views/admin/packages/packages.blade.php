@extends('admin.layouts.default')

@section('title')
    Packages
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
    <script  src=" {{ asset('admin/js/pages/widget3.js')}} "></script>
    <script  src="{{ asset('admin/vendors/countUp.js/js/countUp.min.js')}}"></script>
<script  src="{{ asset('admin/vendors/swiper/js/swiper.min.js')}}"></script>
@endsection

@section('content')
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
                            <i class="fa fa-comment" aria-hidden="true"></i>
                            Comments
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-12 data_tables">
                    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                    @if(Session::get('message'))
                        <p class="alert alert-success">{{Session::get('message')}}</p>
                    @endif
                    <div class="card">
                        <div class="card-body p-t-25">
                        <a href="#" class="btn btn-success pull-right" data-toggle="modal" data-target=".addPackageModal">Add Package</a>
                            <div class="">
                                <div class="pull-sm-right">
                                    <div class="tools pull-sm-right"></div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
                                    <tr style="text-align:center">
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Services</th>
                                        <th>Duration</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    @foreach($packages as $key => $package)
                                    
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $package->title }}</td>
                                        <td>{{ $package->service }}</td>
                                        <td>
                                            <span class="badge badge-pill badge-{{ $package->duration }} x-90">{{ $package->duration }}</span>
                                        </td>
                                        <td>{{ number_format($package->price,2) }}</td>
                                        <td>
                                        @if($package->status == 0)
                                            <a href="{{ url('admin/packages/'.$package->id. '/active') }}" data-background="#00bf86" data-tipso="Click to Active" data-position="bottom" class="btn btn-success tipso m-t-20"
                                                onclick="event.preventDefault();
                                                document.getElementById('active-form-{{ $package->id }}').submit();">
                                                <i class="fa fa-star"></i>
                                            </a>
                                            <form id="active-form-{{ $package->id }}" action="{{ url('admin/packages/'.$package->id. '/active') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            @else
                                            <a href="{{ url('admin/packages/'.$package->id. '/inactive') }}" data-background="#727b84" data-tipso="Click to Inactive" data-position="bottom" class="btn btn-secondary tipso m-t-20"
                                                onclick="event.preventDefault();
                                                document.getElementById('active-form-{{ $package->id }}').submit();">
                                                <i class="fa fa-star-o"></i>
                                            </a>
                                            <form id="active-form-{{ $package->id }}" action="{{ url('admin/packages/'.$package->id. '/inactive') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @endif
                                            <a href="{{ url('admin/packages/' . $package->id . '/delete') }}" class="btn btn-danger tipso m-t-20" data-background="#ff8086" data-tipso="Click to delete" data-position="bottom"
                                                onclick="event.preventDefault();
                                                if (confirm('Are You sure you want to delete this!')) {
                                                    document.getElementById('delete-form-{{ $package->id }}').submit();
                                                }">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $package->id }}" action="{{ url('admin/packages/' . $package->id . '/delete') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            <package-edit-button package_id="{{ $package->id }}" /></package-edit-button>
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
        <modal-new-package></modal-new-package>
        <package-edit/>
    </div>
@endsection

