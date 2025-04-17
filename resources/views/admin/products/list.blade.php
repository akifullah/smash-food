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
                                    <h4 class="card-title mb-0" style="display: inline-block;">Item List</h4>
                                    <a href="{{ route('admin.products.create') }}" style="float:right;"><button
                                            class="btn btn-success">Add New Product</button></a>
                                </div>
                                <div class="card-body">


                                    <div class="table-responsive">
                                        <table id="multi_col_order" class="table table-bordered display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Item Title</th>
                                                    <th>Price</th>
                                                    <th>Category</th>
                                                    <th>description</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $key => $product)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td><img src="{{ asset('uploads/products/' . $product->image) }}"
                                                                style="width:50px;" alt=""></td>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->price }}</td>
                                                        <td>
                                                            <div class="mb-1">
                                                                <span
                                                                    class="badge rounded-pill font-weight-medium bg-light-primary text-primary">{{ $product->category->name }}</span>
                                                            </div>
                                                        </td>
                                                        <td><a href="" target="_blank"><button
                                                                    class="btn btn-xs btn-success">Details</button></td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    onclick="updateStatus({{ $product->id }})"
                                                                    id="{{ 'flexSwitchCheckChecked' . $product->id }}"
                                                                    {{ $product->status == 1 ? 'checked' : '' }}>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="{{ route('admin.products.edit', $product->id) }}"
                                                                    class="btn btn-xs btn-warning">Edit</a>
                                                                <a href="{{ route('admin.products.delete', $product->id) }}"
                                                                    class="btn btn-xs btn-danger ms-2">Delete</a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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

@section('js')
    <script>
        function updateStatus(id) {
            $.ajax({
                url: "{{ route('admin.products.status', ':id') }}".replace(':id', id),
                type: "get",
                data: {
                    id: id
                },
                success: function(response) {
                    if (response.success) {
                        window.location.reload();
                    }
                },
                error: function(response) {
                    console.log(response);
                }
            });
        }
    </script>
@endsection
