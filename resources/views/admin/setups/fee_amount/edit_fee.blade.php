@extends('admin.admin_master')

@section('page_content')
    <script src="{{ asset('../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Content Wrapper. Contains page content -->

    <div class="container-full">

        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Edit Fee Amount</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">

                <!-- /.box-header -->
                <div class="box-body">

                    <div class="col">
                        <form action="{{route('feeamount.update',$editdata[0]->fee_category_id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">

                                    <div class="add_item">
                                        <div class="form-group">
                                            <h5>Fee Category <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="fee_category_id" id="fee_category_id" required
                                                    class="form-control">
                                                    <option value="" selected="" disabled="">Select Fee Category
                                                    </option>
                                                    @foreach ($fee_categories as $fee_cat)
                                                        <option value="{{ $fee_cat->id }}"
                                                            {{ $editdata['0']->fee_category_id == $fee_cat->id ? 'selected' : '' }}>
                                                            {{ $fee_cat->fee_name }}
                                                        </option>

                                                    @endforeach


                                                </select>

                                            </div>
                                        </div>


                                        @foreach ($editdata as $edit)
                                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <h5>Student Class <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="class_id[]" id="class_id" required
                                                                    class="form-control">
                                                                    <option value="" selected="" disabled="">Select Student
                                                                        Class
                                                                    </option>
                                                                    @foreach ($classes as $class)
                                                                        <option value="{{ $class->id }}"
                                                                            {{ $edit->class_id == $class->id ? 'selected' : '' }}>
                                                                            {{ $class->name }}
                                                                        </option>

                                                                    @endforeach


                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">

                                                        <div class="form-group">
                                                            <h5>Amount <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="amount[]"
                                                                    value="{{ $edit->amount }}" class="form-control"
                                                                    required>

                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="col-md-2" style="padding-top: 20px">
                                                        <span class="btn btn-success addeventmore"><i
                                                                class="fa fa-plus-circle"></i></span>
                                                        <span class="btn btn-danger removeeventmore"><i
                                                                class="fa fa-minus-circle"></i></span>

                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>

                            </div>
                            <div class="text-xs-right">

                                <input type="submit" class="btn btn-rounded btn-info" style="float: right" value="Submit">
                            </div>

                        </form>


                    </div>
                    <!-- /.col -->



                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->

    </div>

    <div style="visibility: hidden">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="form-row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <h5>Student Class <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="class_id[]" id="fee_category_id" required class="form-control">
                                    <option value="" selected="" disabled="">Select Student Class
                                    </option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}
                                        </option>

                                    @endforeach


                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">

                        <div class="form-group">
                            <h5>Amount <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="amount[]" class="form-control" required>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-2" style="padding-top: 20px">
                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                        <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 0;
            $(document).on("click", ".addeventmore", function() {
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });

            $(document).on("click", '.removeeventmore', function(event) {

                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1;
            });

        })

    </script>
@endsection
