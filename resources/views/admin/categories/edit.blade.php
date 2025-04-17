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
                                    <h4 class="card-title mb-0" style="display: inline-block;">Edit Category</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.categories.update', $category->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group col-6">
                                            <label for="">Category Name</label>
                                            <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
                                        </div>
                                        <div class="col-6 form-group mt-3">
                                            <label for="image">Image:</label>
                                            <input type="file" class="form-control" name="image" id="image">
                                            <img src="{{ asset("uploads/categories/".$category->image) }}" alt="Category Image" class="img-fluid mt-2">
                                        </div>
                                        <div class="form-group mt-3 col-6">
                                            <button class="btn btn-success">Save</button>
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
