@extends('admin.admin_master')

@section('page_content')

    <div class="container-full">

        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Manage Profile</h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <div class="row">


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>User Email <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" value="{{ $editdata->email }}"
                                                            class="form-control" required>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>User Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" value="{{ $editdata->name }}"
                                                            class="form-control" required>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>User Address <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="address" value="{{ $editdata->address }}"
                                                            class="form-control" required>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>User Mobile <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mobile" value="{{ $editdata->mobile }}"
                                                            class="form-control" required>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>User Gender <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="gender" id="select" required class="form-control">
                                                            <option value="" selected="" disabled="">Select User's Gender
                                                            </option>
                                                            <option value="Male"
                                                                {{ $editdata->gender == 'Male' ? 'selected' : '' }}>
                                                                Male
                                                            </option>
                                                            <option value="Female"
                                                                {{ $editdata->gender == 'Female' ? 'selected' : '' }}>
                                                                Female
                                                            </option>

                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Profile Image <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" value="{{ $editdata->image }}"
                                                            class="form-control" required>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <img src="{{ !empty($editdata->image) ? url('upload/user_images/' . $editdata->image) : url('upload/no_image.jpg') }}"
                                                            alt="User Avatar"
                                                            style="height: 100px; weight:100px; border: 1px solid #000000;">

                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="text-xs-right">

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
