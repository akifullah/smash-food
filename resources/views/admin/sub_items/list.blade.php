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
                                    <h4 class="card-title mb-0" style="display: inline-block;">Create Sub Item</h4>
                                </div>
                                <div class="card-body">
                                    <form id="subItemForm" enctype="multipart/form-data" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="0">
                                        <div class="row">

                                            <div class="col-sm-6 form-group">
                                                <label for="Name">Sub Item Category:</label>
                                                <select name="sub_item_category_id" class="form-select"
                                                    id="sub_item_category_id">
                                                    <option>Select Category</option>
                                                    @foreach ($subItemCategories as $category)
                                                        <option
                                                            {{ old('sub_item_category_id') == $category->id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('sub_item_category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Sub Item Name</label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Price</label>
                                                <input type="text" name="price" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 form-group ">
                                                <label for="image">Image:</label>
                                                <input type="file" class="form-control" name="image" id="image">
                                                <img src="" id="img" alt="">
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group mt-2">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" checked type="checkbox"
                                                            id="flexSwitchCheck" name="status">
                                                        <label class="form-check-label" for="">Status</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3 col-sm-6">
                                                <button type="submit" class="btn bg-success btn-success">Save</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="border-bottom title-part-padding">
                                    <h4 class="card-title mb-0" style="display: inline-block;">Categories List</h4>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="multi_col_order" class="table table-bordered display " style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category Image</th>
                                                    <th>Category Name</th>
                                                    <th>Items Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($subItems as $key => $subItem)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>
                                                            <img src="{{ asset($subItem->image) }}" width="100" />
                                                        </td>
                                                        <td>{{ $subItem->name }}</td>
                                                        <td>{{ $subItem->SubItemCategory->name }}</td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="flexSwitchCheck{{ $subItem->id }}"
                                                                    {{ $subItem->status ? 'checked' : '' }}
                                                                    data-subitem-id="{{ $subItem->id }}"
                                                                    onclick="changeStatus({{ $subItem->id }})">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-xs btn-warning"
                                                                onclick="editSubItem({{ $subItem->id }})">Edit</button>
                                                            <button class="btn btn-xs btn-danger"
                                                                onclick="deleteSubItem({{ $subItem->id }})">Delete</button>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="6" class="text-center">No sub items found</td>
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
@endsection

@section('js')
    <script>
        // ADD SUB ITEM CATEGORIES
        $("#subItemForm").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "{{ route('admin.subitem.store') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Reset the form after successful submission
                    // $("#subItemCateForm")[0].reset();
                    if (response.success) {
                        window.location.reload();
                    } else {
                        alert("Something goes wrong.");
                    }
                    // Show success notification
                    notify('Sub Item created successfully', 'success');

                    // Optional: Reload the page or update the list
                    // location.reload();
                },
                error: function(xhr, status, error) {
                    // Show error notification
                    notify('Error: ' + xhr.responseText, 'error');
                }
            });
        });

        function editSubItem(id) {
            $.ajax({
                url: "{{ route('admin.subitem.edit', ':id') }}".replace(':id', id),
                type: "GET",
                success: function(response) {
                    if (response.success) {
                        // Handle the response data for editing
                        console.log(response.data);
                        const data = response.data;
                        // Populate form fields with the response data
                        $('input[name="id"]').val(data.subItem.id);
                        $('select[name="sub_item_category_id"]').val(data.subItem.sub_item_category_id);
                        $('input[name="name"]').val(data.subItem.name);
                        $('input[name="price"]').val(data.subItem.price);
                        $('input[name="status"]').prop('checked', data.subItem.status == 1);
                        
                        // Update image preview if exists
                        if (data.subItem.image) {
                            $('#img').attr('src', '/' + data.subItem.image);
                        }
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });
                        // You can populate a form or modal with the response data here
                    } else {
                        alert(res.message)
                    }

                },
                error: function(xhr, status, error) {
                    // Show error notification
                    notify('Error: ' + xhr.responseText, 'error');
                }
            });
        }

        // UPDATE SUB ITEM CATEGORIES STATUS




        // CHANGE STATUS
        function changeStatus(id) {
            $.ajax({
                url: "{{ route('sub.item.category.status') }}",
                type: "POST",
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.success) {
                        window.location.reload();
                    }
                    // Show success notification
                    notify('Sub Item Category status updated successfully', 'success');
                },
                error: function(xhr, status, error) {
                    // Show error notification
                    notify('Error: ' + xhr.responseText, 'error');
                }
            });
        }

        // CREATE A DELETE 
        function deleteSubItem(id) {
            if (confirm('Are you sure you want to delete?')) {
                $.ajax({
                    url: "{{ route('admin.subitem.delete') }}",
                    type: "POST",
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            // Remove the deleted category row from the table
                            window.location.reload();
                            // Show success notification
                            notify('Sub Item deleted successfully', 'success');
                        } else {
                            // Show error notification
                            notify('Error: ' + response.message, 'error');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Show error notification
                        notify('Error: ' + xhr.responseText, 'error');
                    }
                });
            }
        }
    </script>
@endsection
