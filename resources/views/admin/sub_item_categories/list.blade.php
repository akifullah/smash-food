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
                                    <form id="subItemCateForm" enctype="multipart/form-data" method="post"
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
                                            <button type="submit" class="btn btn-success">Save</button>
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

@section("js")
<script>
    $("#subItemCateForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        
        $.ajax({
            url: "{{ route('sub.item.category.store') }}",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                // Reset the form after successful submission
                // $("#subItemCateForm")[0].reset();
                
                // Show success notification
                notify('Sub Item Category created successfully', 'success');
                
                // Optional: Reload the page or update the list
                // location.reload();
            },
            error: function(xhr, status, error) {
                // Show error notification
                notify('Error: ' + xhr.responseText, 'error');
            }
        });
    });
</script>

@endsection
