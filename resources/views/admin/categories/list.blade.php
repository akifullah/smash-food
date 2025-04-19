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
                                    <h4 class="card-title mb-0" style="display: inline-block;">Categories List</h4>
                                    <a href="{{ route('admin.categories.create') }}" style="float:right;"><button
                                            class="btn btn-success">Add New Category</button></a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="multi_col_order" class="table table-bordered display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category Image</th>
                                                    <th>Category Name</th>
                                                    {{-- <th>Items</th> --}}
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($categories as $key => $category)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>
                                                            <img src="{{ asset('uploads/categories/' . $category->image) }}"
                                                                width="100" />
                                                        </td>
                                                        <td>{{ $category->name }}</td>

                                                        {{-- <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></a></td> --}}

                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="flexSwitchCheck{{ $category->id }}"
                                                                    {{ $category->status ? 'checked' : '' }}
                                                                    data-category-id="{{ $category->id }}"
                                                                    onclick="changeStatus({{ $category->id }})">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <a href="{{ route('admin.categories.edit', $category->id) }}"><button
                                                                    class="btn btn-xs btn-warning">Edit</button></a>
                                                            <a href="{{ route('admin.categories.delete', $category->id) }}"><button
                                                                    class="btn btn-xs btn-danger">Delete</button></a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center">No categories found</td>
                                                    </tr>
                                                @endforelse

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
        function changeStatus(id) {
            $.ajax({
                url: "{{ route('admin.categories.status', ':id') }}".replace(':id', id),
                type: "GET",
                success: function(response) {
                    if (response.success) {
                        window.location.reload();
                        notify('Status updated successfully', 'success');
                    }
                }
            });
        }
    </script>
@endsection
