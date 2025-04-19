@extends('admin.layouts.main')

@section('content')
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="border-bottom title-part-padding">
                                    <h4 class="card-title mb-0" style="display: inline-block;">Create Sub Item Category</h4>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group col-6">
                                            <label for="">Sub Item Category Name</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <div class="col-6 form-group mt-3">
                                            <label for="image">Image:</label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>
                                        <div class="form-group mt-3 col-6">
                                            <button type="button" class="btn bg-success btn-success">Save</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Row -->
@endsection
