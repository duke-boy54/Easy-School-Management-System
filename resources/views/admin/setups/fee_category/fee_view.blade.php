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
                            <h3 class="box-title">Fee Category List</h3>
                        <a href="{{ route('feecategory.add')}}" style="float: right" class="btn btn-rounded mb-5 btn-success">Add Student Shift</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped table-hover">
                                    <thead class="text-center">
                                        <tr>
                                            <th width="5%">SNo</th>

                                            <th>Shift Name</th>

                                            <th width="25%">Actions</th>

                                        </tr>
                                    </thead>
                                    @foreach ($fee_category as $key => $fee_cat)

                                        <tbody>
                                            <tr>
                                                <td>{{ $key + 1 }}</td>

                                                <td >{{ $fee_cat->fee_name }}</td>

                                                <td>
                                                <a href="{{route('fee.edit',$fee_cat->id)}}" class="btn btn-info btn-rounded">Edit</a>
                                                <a href="{{route('fee.delete',$fee_cat->id)}}" class="btn btn-danger btn-rounded">Delete</a>
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
