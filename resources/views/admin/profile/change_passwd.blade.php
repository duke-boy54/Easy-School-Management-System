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

                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf

                        <div class="form-group"></div>
                        <h5>Current Password <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="password" name="old_password" id="old_password" value="" class="form-control"
                                required>

                        </div>

                        <div class="form-group">
                            <h5>New Password <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password" id="password" class="form-control" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group">
                            <h5>Confirm New Password <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" required>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-rounded btn-info" value="Update">
                        </div>

                    </form>

                </div>


            </div>

        </section>

    </div>

    <div class="control-sidebar-bg"></div>
    </div>
@endsection
