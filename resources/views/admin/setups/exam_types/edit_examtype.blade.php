@extends('admin.admin_master')

@section('page_content')

    <div class="container-full">

        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Exam type Edit</h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                        <form action="{{route('examtype.update',$exam_type->id)}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-10 offset-1">

                                        <div class="form-group">
                                            <h5>Edit Exam Type Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                            <input type="text" name="exam_name" value="{{ $exam_type->exam_name}}"
                                                    class="form-control" required>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                
                                <div class="text-xs-right" style="float: right">
                                   <a href="{{ route('examtype.view')}}" type="button" class="btn btn-rounded btn-info ">Back</a>
                                    <input type="submit" class="btn btn-rounded btn-info" value="Update">
                                </div>

                            </form>


                        </div>
                        <!-- /.col -->


                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>


        <div class="control-sidebar-bg"></div>
    </div>
@endsection
