@extends('admin.layouts.main')

@section('content')
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body">


                <form action="https://smashinit.co.uk/admin/users/update" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW"> <input
                        type="hidden" name="user_id" value="12">
                    <div class="row mt-3">
                        <h3>User Information</h3>
                        <!-- ... (similar changes for other input fields) ... -->
                        <div class="col-6 form-group">
                            <label for="Name">User Member Name:</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg"
                                placeholder="User Full Name" value="Webspires">
                        </div>


                        <div class="col-6 form-group">
                            <label for="gender">User Address:</label>
                            <input type="text" id="address" name="address" class="form-control form-control-lg"
                                placeholder="User Address" value="Higginshaw Ln,">
                        </div>

                        <div class="col-6 form-group mt-3">
                            <label for="phone">phone:</label>
                            <input type="text" id="phone" name="phone" class="form-control form-control-lg"
                                placeholder="user phone #" value="03448959905">
                        </div>
                        <div class="col-6 form-group mt-3">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                placeholder="User Email" value="webspires@gmail.com">
                        </div>
                        <div class="col-6 form-group mt-3">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control "
                                placeholder="Enter Password" value="">
                        </div>

                        <div class="col-6 form-group mt-3">
                            <label for="image">user Picture:</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>



                    </div>

                    <div class="row mt-5">
                        <button type="submit" class="btn btn-success" style="width:200px;margin:auto;">Update user
                            Details</button>
                    </div>
                </form>



            </div>
        </div>
    </div>

</div>
<!-- Row -->
@endsection
