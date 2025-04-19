@extends('admin.layouts.main')


@section('style')
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="https://smashinit.co.uk/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
@endsection
@section('content')
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body">


                    <form action="{{ route('admin.products.update', $product->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <h3>Item Information</h3>
                            <div class="col-6 form-group">
                                <label for="Name"> Item Category:</label>
                                <select name="category_id" class="form-select" id="category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option {{ $product->category_id == $category->id ? 'selected' : '' }}
                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6 form-group">
                                <label for="Name"> Name:</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Item name" value="{{ $product->name }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-6 form-group mt-3">
                                <label for="price">Price:</label>
                                <input type="text" id="price" name="price" class="form-control"
                                    placeholder="Item Price" value="{{ $product->price }}" required>
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-6 form-group mt-3">
                                <label for="image">Item Image:</label>
                                <input type="file" class="form-control" name="image" id="image">
                                <img src="{{ asset('uploads/products/' . $product->image) }}" alt=""
                                    style="width: 100px; height: 100px;">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                            <div class=" col-12 mt-3">
                                <h1 class=" h3 fw-bold">Add Addons</h1>
                                <div class="" id="addons">

                                    @foreach ($product->productSubItemCategory as $subCategory)
                                        <div class="row mt-3" data-category-id="3">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>{{$subCategory->subItemCategory->name}}
                                                    </label>
                                                    <input type="text" name="sub_item_category_id[]" value="{{$subCategory->subItemCategory->id}}"
                                                        class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Selection Type</label>
                                                    <select name="selection_type[]"  class="form-select" required="">
                                                        <option value="single" {{ $subCategory->selection_type == 'single' ? 'selected' : '' }}>Single</option>
                                                        <option value="multiple" {{ $subCategory->selection_type == 'multiple' ? 'selected' : '' }}>Multiple</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Is Required</label>
                                                    <select name="is_required[]"  class="form-select" required="">
                                                        <option value="0" {{ $subCategory->is_required == 0 ? 'selected' : '' }}>No</option>
                                                        <option value="1" {{ $subCategory->is_required == 1 ? 'selected' : '' }}>Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Min Req. Quantity</label>
                                                    <input type="number" name="min_qty[]" class="form-control"
                                                        value="{{ $subCategory->min_qty }}">
                                                </div>
                                            </div>


                                        </div>
                                    @endforeach
                                    <!-- Form fields will be dynamically appended here via JavaScript -->
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Name">Add Sub Category:</label>
                                            <select class="form-control" id="sub_item_category_id">
                                                <option value="">Select Sub Category</option>
                                                @foreach ($subCategories as $subCategory)
                                                    <option value="{{ $subCategory->id }}">{{ $subCategory->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- <div class="row mt-5" id="category_as_extra_section" style="display:none;">

                                <div class="col-4 form-group mt-3">
                                    <label for="Name"> Order Of Showing:</label>
                                    <input type="text" class="form-control" name="category_as_extra_order[]"
                                        value="">
                                </div>
                                <div class="col-4 form-group mt-3">
                                    <label for="Name"> Item Category:</label>
                                    <select name="category_as_extra[]" class="form-control" id="">
                                        <option value="">Select Category as Extra</option>
                                        <option value="1">Meals</option>
                                        <option value="2">Smash Burgers</option>
                                        <option value="3">chicken in mix</option>
                                        <option value="4">Classic Burgers</option>
                                        <option value="5">Loaded Fries (New)</option>
                                        <option value="6">Wraps</option>
                                        <option value="7">Chicken Tenders</option>
                                        <option value="8">Premium Sides</option>
                                        <option value="9">Kids</option>
                                        <option value="10">Fries</option>
                                        <option value="11">Shakes</option>
                                        <option value="12">Dips</option>
                                        <option value="13">Drinks</option>
                                        <option value="14">American</option>
                                    </select>
                                </div>
                                <div class="col-4 form-group mt-3">
                                    <label for="Name">Extra Type:</label>
                                    <select name="extra_type[]" class="form-control" id="">
                                        <option value="1">Radio: Select only one extra from list</option>
                                        <option value="2">CheckBox: Select multiple extras from list</option>
                                    </select>
                                </div>
                                <div class="col-4 form-group mt-3">
                                    <label for="Name"> Is Required:</label>
                                    <select name="is_required[]" class="form-control" id="">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="col-4 form-group mt-3">
                                    <label for="Name">How Much Items are Required:</label>
                                    <input class="form-control" type="number" name="required_qty[]"
                                        placeholder="Required Qty ">


                                </div>
                            </div>
                            <div class="row mt-5" id="manual_extra_section"
                                style="border: 1px solid #efefef;border-radius: 10px;padding: 10px;margin: 0;">
                                <div class="row mb-3" id="manual_extra_section_row_0">

                                    <div class="col-2 form-group mt-3">
                                        <label for="Name"> Extra Section Order:</label>
                                        <input type="text" class="form-control " name="manual_extra_section_order["
                                            value="">
                                    </div>
                                    <div class="col-6 form-group mt-3">
                                        <label for="Name"> Extra Section Title:</label>
                                        <input type="text" class="form-control" name="manual_extra_section_title[]"
                                            value="">
                                    </div>
                                    <div class="col-4 form-group mt-3">
                                        <label for="Name">Extra Type:</label>
                                        <select name="manual_extra_type[]" class="form-control" id="">
                                            <option value="1">Radio: Select only one extra from list</option>
                                            <option value="2">CheckBox: Select multiple extras from list</option>
                                        </select>
                                    </div>
                                    <div class="row" id="item_row_0">
                                        <input type="hidden" class="detail_hidden"
                                            name="manual_extra_details_count[0][]" value="0">
                                        <div class="col-3 form-group mt-3">
                                            <label for="Name">Extra Item Title:</label>
                                            <input type="text" class="form-control" name="manual_extra_title[0][]"
                                                value="">
                                        </div>
                                        <div class="col-3 form-group mt-3">
                                            <label for="Name">Extra Item Price:</label>
                                            <input type="text" class="form-control" name="manual_extra_price[0][]"
                                                value="">
                                        </div>
                                        <div class="col-4 form-group mt-3">
                                            <label for="Name">Extra Item Image:</label>
                                            <input type="file" class="form-control " name"manual_extra_image[0][]"
                                                value="">
                                        </div>
                                        <div class="col-2 form-group mt-3" style="padding-top: 25px;">
                                            <button class="btn btn-lg btn-danger"
                                                onclick="delete_item_row(0,0)">Delete</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group mt-3 col-6">
                                    <button type="button" class="btn btn-sm btn-success" onclick="add_new_extra_item(0)">Add new extra
                                        item</button>
                                </div>
                            </div>


                            <div type="button" class="col-12 mt-3 text-center">
                                <button type="button" class="btn btn-success bg-success"
                                    onclick="add_separate_extra()">Add
                                    Separate Extras</button>
                                <button type="button" class="btn btn-success bg-success"
                                    onclick="add_category_as_extra()">Use
                                    Category As Extras</button>
                            </div> --}}


                            <div class="col-12 mt-5">
                                <label for="description">Item Description:</label>
                                <textarea name="description" id="description" class="summernote">{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <button type="submit" class="btn bg-success btn-success">Save Item Details</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>

    </div>
    <!-- Row -->
@endsection


@section('js')
    <script src="https://smashinit.co.uk/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="https://smashinit.co.uk/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="https://smashinit.co.uk/dist/js/pages/forms/select2/select2.init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            let selectedCategories = new Set();

            function updateCategoryOptions() {
                // Hide already selected categories from dropdown
                $('#sub_item_category_id option').show();
                selectedCategories.forEach(categoryId => {
                    $(`#sub_item_category_id option[value="${categoryId}"]`).hide();
                });
            }

            $('#sub_item_category_id').on('change', function() {
                var categoryId = $(this).val();
                if (categoryId) {
                    // Don't clear previous fields, just append new ones
                    if (!selectedCategories.has(categoryId)) {
                        selectedCategories.add(categoryId);

                        // Get the selected category name
                        var categoryName = $('#sub_item_category_id option:selected').text();

                        // Create form fields with category ID in the name
                        var html = `
                            <div class="row mt-3" data-category-id="${categoryId}">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>${categoryName}</label>
                                        <input type="text" name="sub_item_category_id[${categoryId}]" value="${categoryId}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Selection Type</label>
                                        <select name="selection_type[${categoryId}]" class="form-select" required>
                                            <option value="single">Single</option>
                                            <option value="multiple">Multiple</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Is Required</label>
                                        <select name="is_required[${categoryId}]" class="form-select" required>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Min Req. Quantity</label>
                                        <input type="number" name="min_qty[${categoryId}]" class="form-control" value="1">
                                    </div>
                                </div>
                                
                                
                            </div>
                        `;

                        $('#addons').append(html);
                        updateCategoryOptions();
                    }
                }
            });

            // Initial update of category options
            updateCategoryOptions();
        });
    </script>




    <script>
        $(document).ready(function() {

            $('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });

        });
    </script>


    <script>
        var items_count = 0;
        var separate_extra = 0;
        var category_extra = 0;

        function add_separate_extra() {
            if (separate_extra === 0) {
                $('#manual_extra_section').prepend(
                    `
                <input type="hidden" name="manual_extra_section_count[]" value="0">
                `
                );
                $('#manual_extra_section').show();

            } else {
                $('#manual_extra_section').append(`
            <div class="row mb-3" id="manual_extra_section_row_` + (separate_extra) + `">
                    <input type="hidden" name="manual_extra_section_count[]" value="` + (separate_extra) + `">
                    <div class="col-2 form-group mt-3">
                        <label for="Name"> Extra Section Order:</label>
                        <input type="text" class="form-control" name="manual_extra_section_order[]" value="">
                    </div>
                    <div class="col-6 form-group mt-3">
                        <label for="Name"> Extra Section Title:</label>
                        <input type="text" class="form-control" name="manual_extra_section_title[]" value="">
                    </div>
                    <div class="col-4 form-group mt-3">
                        <label for="Name">Extra Type:</label>
                        <select name="manual_extra_type[]" class="form-control" id="">
                            <option value="1">Radio: Select only one extra from list</option>
                            <option value="2">CheckBox: Select multiple extras from list</option>
                        </select>
                    </div>
                    <div class="row" id="item_row_` + (separate_extra) + `">
                        <input type="hidden" class="detail_hidden" name="manual_extra_details_count[` + (
                    separate_extra) + `][]" value="0">
                        <div class="col-3 form-group mt-3">
                            <label for="Name">Extra Item Title:</label>
                            <input type="text" class="form-control" name="manual_extra_title[` + (
                    separate_extra) + `][]" value="">
                        </div>
                        <div class="col-3 form-group mt-3">
                            <label for="Name">Extra Item Price:</label>
                            <input type="text" class="form-control" name="manual_extra_price[` + (
                    separate_extra) + `][]" value="">
                        </div>
                        <div class="col-4 form-group mt-3">
                            <label for="Name">Extra Item Image:</label>
                            <input type="file" class="form-control" name="manual_extra_image[` + (
                    separate_extra) + `][]" value="">
                        </div>
                        <div class="col-2 form-group mt-3" style="padding-top: 25px;">
                            <button  class="btn btn-lg btn-danger" onclick="delete_item_row(` + (
                    separate_extra) + `,0)">Delete</button>
                        </div>
                    </div>

                </div>
                <div class="form-group mt-3 col-6">
                    <button  class="btn btn-sm btn-success" onclick="add_new_extra_item(` + (
                    separate_extra) + `)">Add new extra item</button>
                </div>
                `);
            }
            separate_extra++;

        }

        function add_category_as_extra() {
            if (category_extra === 0) {
                $('#category_as_extra_section').show();
                $('#category_as_extra_section').prepend(`<input type="hidden" name="category_as_extra_count[]" value="0">`);
            } else {
                $('#category_as_extra_section').append(`
                <div  class="row w-100">
            <input type="hidden" name="category_as_extra_count[]" value="` + category_extra + `">
                <div class="col-4 form-group mt-3">
                    <label for="Name"> Order Of Showing:</label>
                    <input type="text" class="form-control" name="category_as_extra_order[]" value="">
                </div>
                <div class="col-4 form-group mt-3">
                    <label for="Name"> Item Category:</label>
                    <select name="category_as_extra[]" class="form-control" id="">
                        <option value="">Select Category as Extra</option>
                                                    <option value="1">Meals</option>
                                                    <option value="2">Smash Burgers</option>
                                                    <option value="3">chicken in mix</option>
                                                    <option value="4">Classic Burgers</option>
                                                    <option value="5">Loaded Fries (New)</option>
                                                    <option value="6">Wraps</option>
                                                    <option value="7">Chicken Tenders</option>
                                                    <option value="8">Premium Sides</option>
                                                    <option value="9">Kids</option>
                                                    <option value="10">Fries</option>
                                                    <option value="11">Shakes</option>
                                                    <option value="12">Dips</option>
                                                    <option value="13">Drinks</option>
                                                    <option value="14">American</option>
                                            </select>
                </div>
                <div class="col-4 form-group mt-3">
                    <label for="Name">Extra Type:</label>
                    <select name="extra_type[]" class="form-control" id="">
                        <option value="1">Radio: Select only one extra from list</option>
                        <option value="2">CheckBox: Select multiple extras from list</option>
                    </select>
                </div>
                <div class="col-4 form-group mt-3">
                                    <label for="Name"> Is Required:</label>
                                    <select name="is_required[]" class="form-control" id="">    
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="col-4 form-group mt-3">
                                    <label for="Name">How Much Items are Required:</label>
                                    <input class="form-control" type="number" name="required_qty[]" placeholder="Required Qty " >
                                    
                                    
                                </div>
                                </div>
            `);
            }
            category_extra++;
        }

        function add_new_extra_item(row) {
            var hiddenInputValue = $('#manual_extra_section_row_' + row + ' input[type="hidden"].detail_hidden').length;


            $('#manual_extra_section_row_' + row).append(

                `
            <div class="row" id="item_row_` + (row) + `">
                <input type="hidden" class="detail_hidden" name="manual_extra_details_count[` + (row) +
                `][]" value="` + hiddenInputValue + `">
                <div class="col-3 form-group mt-3">
                    <label for="Name">Extra Item Title:</label>
                    <input type="text" class="form-control" name="manual_extra_title[` + (row) + `][]" value="">
                </div>
                <div class="col-3 form-group mt-3">
                    <label for="Name">Extra Item Price:</label>
                    <input type="text" class="form-control" name="manual_extra_price[` + (row) + `][]" value="">
                </div>
                <div class="col-4 form-group mt-3">
                    <label for="Name">Extra Item Image:</label>
                    <input type="file" class="form-control" name="manual_extra_image[` + (row) + `][]" value="">
                </div>
                <div class="col-2 form-group mt-3" style="padding-top: 25px;">
                    <button  class="btn btn-lg btn-danger" onclick="delete_item_row(` + (row) + `,` + (
                    row + 1) + `)">Delete</button>
                </div>
            </div>`
            )

        }

        function delete_item_row(count) {
            $('#item_row_' + count).remove();
        }
    </script>
@endsection
