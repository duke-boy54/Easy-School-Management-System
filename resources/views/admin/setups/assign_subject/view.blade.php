@extends('admin.admin_master')

@section('page_content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissable">

            {{-- < id="alerttopright" class="myadmin-alert alert-success myadmin-alert-top-right"> <a href="#" class="closed">&times;</a> --}}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ session('success') }}</strong>
        </div>

    @endif
    <!-- Content Wrapper. Contains page content -->

    <div class="container-full">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">



                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Assigned Subject List</h3>
                        <a href="{{ route('assignsubject.add')}}" style="float: right" class="btn btn-rounded mb-5 btn-success">Assign Student Subject</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped table-hover">
                                    <thead class="text-center">
                                        <tr>
                                            <th width="5%">SNo</th>

                                            <th>Class Name</th>

                                            <th width="25%">Actions</th>

                                        </tr>
                                    </thead>
                                    @foreach ($assign_subj as $key => $subject)

                                        <tbody>
                                            <tr>
                                                <td>{{ $key + 1 }}</td>

                                                <td >{{ $subject['student_class']['name'] }}</td>
                                                 {{-- <td>{{ $fee_amount->}}</td> --}}

                                                <td>
                                                <a href="{{ route('assignsubject.edit',$subject->class_id)}}" class="btn btn-info btn-rounded">Edit</a>
                                                <a href="{{ route('assignsubject.details',$subject->class_id)}}" class="btn btn-primary btn-rounded">Details</a>

                                                </td>

                                            </tr>


                                        </tbody>
                                    @endforeach


                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- /.box -->


                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

@endsection
