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
                            <h3 class="box-title">Student Fee Amounts Details</h3>
                            <a href="{{ route('feeamount.view') }}" style="float: right"
                                class="btn btn-rounded mb-5 btn-success">Go Back</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            {{-- <h4><strong>Fee Category :</strong>{{ $detailsdata['0']['fee_category']['fee_name'] }}</h4> --}}
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead class="text-center thead-light">
                                        <tr>
                                            <th width="5%">SNo</th>

                                            <th>Class Name *</th>

                                            <th>Amounts</th>

                                        </tr>
                                    </thead>
                                    @foreach ($detailsdata as $key => $details)

                                        <tbody>
                                            <tr>
                                                <td>{{ $key + 1 }}</td>

                                                <td>{{ $details['FeeAmountDetails']['name'] }}</td>

                                                <td>{{ $details->amount }}</td>

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
