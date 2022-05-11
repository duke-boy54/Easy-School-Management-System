@extends('admin.admin_master')

@section('page_content')

    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-3 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-primary-light rounded w-60 h-60">
                                <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                            </div>
                            <div>
                                <p class="text-mute mt-20 mb-0 font-size-16">New Students</p>
                                <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i
                                            class="fa fa-caret-up"></i> +2.5%</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-warning-light rounded w-60 h-60">
                                <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                            </div>
                            <div>
                                <p class="text-mute mt-20 mb-0 font-size-16">New Employees</p>
                                <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i
                                            class="fa fa-caret-up"></i> +2.5%</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-info-light rounded w-60 h-60">
                                <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                            </div>
                            <div>
                                <p class="text-mute mt-20 mb-0 font-size-16">School Projects</p>
                                <h3 class="text-white mb-0 font-weight-500">$1,250 <small class="text-success"><i
                                            class="fa fa-caret-down"></i> 0.5%</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-6">
                    <div class="box overflow-hidden pull-up">
                        <div class="box-body">
                            <div class="icon bg-danger-light rounded w-60 h-60">
                                <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                            </div>
                            <div>
                                <p class="text-mute mt-20 mb-0 font-size-16">Events Callender</p>
                                <h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-success"><i
                                            class="fa fa-caret-up"></i> 1.5%</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
           
                <div class="col-xxxl-5 col-xl-6 col-12">
                    <div class="box overflow-hidden">
                        <div class="box-body p-0">
                            <div class="row no-gutters">
                                <div class="col-md-6 col-12">
                                    <div class="box no-shadow mb-0 rounded-0">
                                        <div class="box-header no-border">
                                            <h4 class="box-title mb-0">
                                                Recent Activities
                                            </h4>
                                        </div>
                                        <div class="box-body p-0">
                                            <div class="media-list media-list-hover">
                                                <a class="media media-single hover-white" href="#">
                                                    <div class="media-body">
                                                        <h5>School New Projects</h5>
                                                    </div>
                                                </a>
                                            
                                                <a class="media media-single hover-white" href="#">
                                                    <div class="media-body">
                                                        <h5>Examination Schedule Meeting</h5>
                                                    </div>
                                                </a>
                                                <a class="media media-single hover-white" href="#">
                                                    <div class="media-body">
                                                        <h5>Administrative Senior Meeting</h5>
                                                    </div>
                                                </a>
                                                <a class="media media-single hover-white" href="#">
                                                    <div class="media-body">
                                                        <h5>Academic Results Release</h5>
                                                    </div>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="box no-shadow mb-0 bg-img rounded-0" data-overlay="5"
                                        style="background-image: url(../images/gallery/landscape7.jpg)">
                                        {{-- <div class="box-header no-border">
                                            <h4 class="box-title mb-0">
                                                <span class="avatar avatar-lg bg-success">DK</span>
                                            </h4>
                                            {{-- <ul class="box-controls">
                                                <li><a href="javascript:void(0)"><i class="ti-reload text-white"></i></a>
                                                </li>
                                            </ul> --}}
                                        {{-- </div> --}} 
                                        <div class="box-body">
                                            <div class="text-right mt-100 pt-20">
                                                <h3 class="text-white"><small class="mr-10"><i
                                                            class="fa fa-commenting"></i></small> 3</h3>
                                                <h2 class="text-white"><small class="mr-10"><i
                                                            class="fa fa-heart"></i></small> 23</h2>
                                                <h1 class="text-white"><small class="mr-10"><i
                                                            class="fa fa-eye"></i></small> 189</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxxl-7 col-xl-6 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Recent Stats</h4>
                        </div>
                        <div class="box-body">
                            <div id="recent_trend"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title align-items-start flex-column">
                                New School Updates
                                <small class="subtitle">More than 400+ new members</small>
                            </h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-border">
                                    <thead>
                                        <tr class="text-uppercase bg-lightest">
                                            <th style="min-width: 250px"><span class="text-white">project</span></th>
                                            <th style="min-width: 100px"><span class="text-fade">cost</span></th>
                                            <th style="min-width: 100px"><span class="text-fade">deposit</span></th>
                                            <th style="min-width: 150px"><span class="text-fade">agent</span></th>
                                            <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                            <th style="min-width: 120px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                        <div class="bg-img h-50 w-50"
                                                            style="background-image: url(../images/gallery/creative/img-1.jpg)">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <a href="#"
                                                            class="text-white font-weight-600 hover-primary mb-1 font-size-16">School
                                                            Infrastructure</a>
                                                        <span class="text-fade d-block">chairs,tables,technical equipments
                                                            </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Paid
                                                </span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    $45,800k
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Paid
                                                </span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    $45k
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Duke
                                                </span>
                                                
                                            </td>
                                            <td>
                                                <span class="badge badge-primary-light badge-lg">Approved</span>
                                            </td>
                                            <td class="text-right">
                                                <a href="#"
                                                    class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                        class="mdi mdi-bookmark-plus"></span></a>
                                                <a href="#"
                                                    class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                        class="mdi mdi-arrow-right"></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                        <div class="bg-img h-50 w-50"
                                                            style="background-image: url(../images/gallery/creative/img-2.jpg)">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <a href="#"
                                                            class="text-white font-weight-600 hover-primary mb-1 font-size-16">Food and Medicine
                                                            </a>
                                                        <span class="text-fade d-block">Mahindi $ Maharage
                                                            </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Paid
                                                </span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    $45,800k
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Paid
                                                </span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    $45k
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Brenda
                                                </span>
                                                
                                            </td>
                                            <td>
                                                <span class="badge badge-warning-light badge-lg">In Progress</span>
                                            </td>
                                            <td class="text-right">
                                                <a href="#"
                                                    class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                        class="mdi mdi-bookmark-plus"></span></a>
                                                <a href="#"
                                                    class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                        class="mdi mdi-arrow-right"></span></a>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                        <div class="bg-img h-50 w-50"
                                                            style="background-image: url(../images/gallery/creative/img-4.jpg)">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <a href="#"
                                                            class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                            consectetur</a>
                                                        <span class="text-fade d-block">Pharetra, Nulla , Nec,
                                                            Aliquet</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Paid
                                                </span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    $45,800k
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Paid
                                                </span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    $45k
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Sophia
                                                </span>
                                              
                                            </td>
                                            <td>
                                                <span class="badge badge-danger-light badge-lg">Rejected</span>
                                            </td>
                                            <td class="text-right">
                                                <a href="#"
                                                    class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                        class="mdi mdi-bookmark-plus"></span></a>
                                                <a href="#"
                                                    class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                        class="mdi mdi-arrow-right"></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0 py-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 mr-20">
                                                        <div class="bg-img h-50 w-50"
                                                            style="background-image: url(../images/gallery/creative/img-5.jpg)">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <a href="#"
                                                            class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                            consectetur</a>
                                                        <span class="text-fade d-block">Pharetra, Nulla , Nec,
                                                            Aliquet</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Paid
                                                </span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    $45,800k
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Paid
                                                </span>
                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    $45k
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-fade font-weight-600 d-block font-size-16">
                                                    Sophia
                                                </span>
                                              
                                            </td>
                                            <td>
                                                <span class="badge badge-warning-light badge-lg">In Progress</span>
                                            </td>
                                            <td class="text-right">
                                                <a href="#"
                                                    class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                        class="mdi mdi-bookmark-plus"></span></a>
                                                <a href="#"
                                                    class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                        class="mdi mdi-arrow-right"></span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
