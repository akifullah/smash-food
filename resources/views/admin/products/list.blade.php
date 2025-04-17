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
                                    <a href="https://smashinit.co.uk/admin/item/create" style="float:right;"><button
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
                                                    <th>Details</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714328790.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Rubicon Mango</td>
                                                    <td>&pound;1.20</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Drinks</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/3"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/3"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/3"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714328812.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Rio</td>
                                                    <td>&pound;1.20</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Drinks</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/4"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/4"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/4"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714328846.jpeg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Coke</td>
                                                    <td>&pound;1.20</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Drinks</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/5"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/5"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/5"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714328867.jpeg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Diet Coke</td>
                                                    <td>&pound;1.20</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Drinks</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/6"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/6"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/6"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714328913.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Fanta</td>
                                                    <td>&pound;1.20</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Drinks</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/7"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/7"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/7"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714328928.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Sprite</td>
                                                    <td>&pound;1.20</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Drinks</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/8"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/8"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/8"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714637566.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>The Rashford Meal (NEW)</td>
                                                    <td>&pound;11.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/9"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/9"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/9"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714639410.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Real Smash Meal</td>
                                                    <td>&pound;9.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/10"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/10"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/10"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714641202.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Bacon&#039;d Up Meal</td>
                                                    <td>&pound;11.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/11"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/11"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/11"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714643236.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>The Rashford (NEW)</td>
                                                    <td>&pound;9.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Smash
                                                                Burgers</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/13"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/13"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/13"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714643767.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Real Smash</td>
                                                    <td>&pound;6.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Smash
                                                                Burgers</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/15"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/15"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/15"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714644186.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Monster&#039;d Up Meal</td>
                                                    <td>&pound;16.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/16"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/16"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/16"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714645652.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Clucking Original Meal</td>
                                                    <td>&pound;8.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/20"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/20"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/20"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714646269.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Clucking Spicy Meal</td>
                                                    <td>&pound;8.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/22"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/22"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/22"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714647230.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Mixed Original Meal</td>
                                                    <td>&pound;10.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/24"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/24"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/24"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714647664.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Bacon&#039;d Up</td>
                                                    <td>&pound;8.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Smash
                                                                Burgers</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/25"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/25"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/25"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714647808.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Mixed Spicy Meal</td>
                                                    <td>&pound;11.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/26"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/26"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/26"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714648102.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Monster&#039;d Up</td>
                                                    <td>&pound;13.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Smash
                                                                Burgers</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/27"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/27"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/27"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714648503.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Burgerfy Classic Meal</td>
                                                    <td>&pound;5.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/28"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/28"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/28"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714649618.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Double Classic Meal</td>
                                                    <td>&pound;5.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/29"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/29"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/29"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714650142.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Burgerfy Bacon Meal</td>
                                                    <td>&pound;6.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/30"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/30"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/30"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714650581.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Burgerfy Quad Meal</td>
                                                    <td>&pound;8.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/31"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/31"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/31"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714650982.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Chicken Strips Meal (4 Pcs)</td>
                                                    <td>&pound;7.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/32"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/32"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/32"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714651201.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Spicy Chicken Strips Meal (4 Pcs)</td>
                                                    <td>&pound;7.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/33"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/33"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/33"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>Chicken Wrap Meal</td>
                                                    <td>&pound;7.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/34"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/34"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/34"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714654067.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Buffalo Chicken Strips Meal (4 Pcs)</td>
                                                    <td>&pound;7.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/35"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/35"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/35"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714655155.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Bbq Chicken Strips Meal (4 Pcs)</td>
                                                    <td>&pound;7.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/36"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/36"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/36"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>BBQ Chicken Wrap Meal</td>
                                                    <td>&pound;7.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/38"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/38"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/38"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>Chicken Loaded Fries Meal</td>
                                                    <td>&pound;8.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/39"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/39"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/39"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>Keema Loaded Fries Meal</td>
                                                    <td>&pound;8.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/40"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/40"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/40"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>31</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>Boneless Box Meal</td>
                                                    <td>&pound;6.00</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/41"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/41"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/41"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714736446.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Clucking Spicy</td>
                                                    <td>&pound;6.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">chicken
                                                                in mix</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/42"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/42"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/42"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>33</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714737515.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Mixed Spicy</td>
                                                    <td>&pound;8.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">chicken
                                                                in mix</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/45"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/45"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/45"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714738354.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Burgerfy Classic</td>
                                                    <td>&pound;2.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Classic
                                                                Burgers</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/46"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/46"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/46"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>35</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714738821.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Double Classic</td>
                                                    <td>&pound;3.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Classic
                                                                Burgers</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/47"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/47"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/47"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714739427.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Burgerfy Quad</td>
                                                    <td>&pound;5.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Classic
                                                                Burgers</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/48"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/48"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/48"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714740496.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Chicken Loaded Fries</td>
                                                    <td>&pound;7.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Loaded
                                                                Fries (New)</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/49"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/49"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/49"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>38</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714741098.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Keema Loaded Fries</td>
                                                    <td>&pound;7.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Loaded
                                                                Fries (New)</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/50"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/50"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/50"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>Chicken Wrap</td>
                                                    <td>&pound;4.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Wraps</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/51"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/51"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/51"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>40</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>BBQ Wrap</td>
                                                    <td>&pound;5.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Wraps</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/52"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/52"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/52"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>41</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>Spicy Chicken Wrap</td>
                                                    <td>&pound;5.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Wraps</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/53"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/53"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/53"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>42</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>Mix Wrap</td>
                                                    <td>&pound;7.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Wraps</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/54"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/54"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/54"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>43</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714743136.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Buffalo Chicken Strips (4 Pcs)</td>
                                                    <td>&pound;5.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Chicken
                                                                Tenders</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/55"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/55"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/55"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>44</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714743194.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Chicken Strips (4 Pcs)</td>
                                                    <td>&pound;4.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Chicken
                                                                Tenders</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/56"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/56"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/56"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>45</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714743246.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Spicy Chicken Strips (4 Pcs)</td>
                                                    <td>&pound;5.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Chicken
                                                                Tenders</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/57"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/57"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/57"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>46</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714743325.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>BBQ Chicken Tenders</td>
                                                    <td>&pound;5.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Chicken
                                                                Tenders</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/58"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/58"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/58"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>47</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714743575.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Mozzarella Sticks</td>
                                                    <td>&pound;3.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Premium
                                                                Sides</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/59"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/59"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/59"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>48</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714743863.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Onion Rings (10 Pcs)</td>
                                                    <td>&pound;3.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Premium
                                                                Sides</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/60"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/60"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/60"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>49</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714746377.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Hash Brown (3 Pcs)</td>
                                                    <td>&pound;2.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Premium
                                                                Sides</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/61"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/61"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/61"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>50</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714746537.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Chicken Popcorn Meal</td>
                                                    <td>&pound;4.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Kids</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/62"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/62"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/62"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>51</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714746587.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Chicken Nuggets Meal</td>
                                                    <td>&pound;4.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Kids</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/63"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/63"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/63"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>52</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714746831.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Curly Fries</td>
                                                    <td>&pound;2.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Fries</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/64"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/64"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/64"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>53</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714746988.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Sweet Potato Fries</td>
                                                    <td>&pound;3.75</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Fries</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/65"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/65"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/65"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>54</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714747132.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Regualar Fries</td>
                                                    <td>&pound;2.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Fries</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/66"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/66"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/66"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>55</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>Peri Fries</td>
                                                    <td>&pound;2.70</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Fries</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/67"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/67"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/67"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>56</td>
                                                    <td><img src="https://smashinit.co.uk/item_images" style="width:50px;"
                                                            alt=""></td>
                                                    <td>Cheesy Fries</td>
                                                    <td>&pound;3.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Fries</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/68"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/68"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/68"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>57</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714747853.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>12oz Ferrero</td>
                                                    <td>&pound;4.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Shakes</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/69"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/69"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/69"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>58</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714747935.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>16oz Ferrero</td>
                                                    <td>&pound;5.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Shakes</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/70"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/70"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/70"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>59</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748043.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>12oz Oreo</td>
                                                    <td>&pound;4.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Shakes</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/71"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/71"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/71"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>60</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748100.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>16oz Oreo</td>
                                                    <td>&pound;5.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Shakes</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/72"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/72"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/72"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>61</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748139.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>12oz Kinder</td>
                                                    <td>&pound;4.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Shakes</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/73"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/73"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/73"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>62</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748183.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>16oz Kinder</td>
                                                    <td>&pound;5.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Shakes</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/74"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/74"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/74"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>63</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748233.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>12oz Lotus</td>
                                                    <td>&pound;4.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Shakes</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/75"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/75"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/75"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>64</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748263.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>16oz Lotus</td>
                                                    <td>&pound;5.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Shakes</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/76"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/76"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/76"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>65</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748569.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>16oz Make Your Shake</td>
                                                    <td>&pound;6.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Shakes</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/78"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/78"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/78"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>66</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748620.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>House Special Sauce</td>
                                                    <td>&pound;0.80</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Dips</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/79"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/79"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/79"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>67</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748650.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Mayo</td>
                                                    <td>&pound;0.80</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Dips</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/80"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/80"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/80"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>68</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748680.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Buffalo Sauce</td>
                                                    <td>&pound;0.80</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Dips</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/81"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/81"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/81"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>69</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748710.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Ketchup</td>
                                                    <td>&pound;0.80</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Dips</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/82"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/82"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/82"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>70</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748733.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Nacho Cheese Sauce</td>
                                                    <td>&pound;1.20</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Dips</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/83"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/83"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/83"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>71</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748759.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Home Made Ranch Sauce</td>
                                                    <td>&pound;0.80</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Dips</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/84"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/84"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/84"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>72</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748794.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>PERI MAYO</td>
                                                    <td>&pound;0.80</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Dips</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/85"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/85"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/85"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>73</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748819.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Home Made Garlic Mayo</td>
                                                    <td>&pound;0.80</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Dips</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/86"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/86"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/86"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>74</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748870.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Mayo</td>
                                                    <td>&pound;0.00</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">American</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/87"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/87"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/87"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>75</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748892.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>No Mayo</td>
                                                    <td>&pound;0.00</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">American</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/88"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/88"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/88"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>76</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714748996.jpeg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Fruit Shoot Blackcurrant</td>
                                                    <td>&pound;1.00</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Drinks</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/89"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/89"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/89"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>77</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714749052.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Fruits Shoot Orange</td>
                                                    <td>&pound;1.00</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Drinks</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/90"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/90"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/90"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>78</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714749096.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Water 500ml</td>
                                                    <td>&pound;1.00</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Drinks</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/91"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/91"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/91"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>79</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714980152.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>12oz Make Your Shake</td>
                                                    <td>&pound;5.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Shakes</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/93"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/93"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/93"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>80</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714982065.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>The Haaland (NEW)</td>
                                                    <td>&pound;9.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Smash
                                                                Burgers</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/94"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/94"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/94"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>81</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714983461.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Doubl&#039;d Up</td>
                                                    <td>&pound;7.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Smash
                                                                Burgers</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/95"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/95"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/95"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>82</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714984311.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Doubl&#039;d Up Meal</td>
                                                    <td>&pound;10.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/96"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/96"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/96"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>83</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714985244.png"
                                                            style="width:50px;" alt=""></td>
                                                    <td>The Haaland Meal (NEW)</td>
                                                    <td>&pound;11.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/97"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/97"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/97"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>84</td>
                                                    <td><img src="https://smashinit.co.uk/item_images"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Spicy Chicken Wrap Meal</td>
                                                    <td>&pound;7.95</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/98"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/98"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/98"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>85</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714992245.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Mixed Original</td>
                                                    <td>&pound;8.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">chicken
                                                                in mix</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/99"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/99"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/99"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>86</td>
                                                    <td><img src="https://smashinit.co.uk/item_images/item_1714992745.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Burgerfy Bacon</td>
                                                    <td>&pound;4.45</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Classic
                                                                Burgers</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/100"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/100"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/100"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>87</td>
                                                    <td><img src="https://smashinit.co.uk/item_images"
                                                            style="width:50px;" alt=""></td>
                                                    <td>Custom</td>
                                                    <td>&pound;100.00</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/101"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/101"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/101"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>88</td>
                                                    <td><img src="https://smashinit.co.uk/item_images"
                                                            style="width:50px;" alt=""></td>
                                                    <td>custom 2</td>
                                                    <td>&pound;100.00</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Meals</span>
                                                        </div>
                                                    </td>
                                                    <td><a href="https://smashinit.co.uk/admin/item/details/102"
                                                            target="_blank"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/item/edit/102"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/item/delete/102"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>

                                                </tr>



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
