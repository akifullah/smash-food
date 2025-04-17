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
                                    <a href="https://smashinit.co.uk/admin/categories/create" style="float:right;"><button
                                            class="btn btn-success">Add New Category</button></a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="multi_col_order" class="table table-bordered display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category Title</th>
                                                    <th>Items</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Meals</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck1" checked data-category-id="1">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/1"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/1"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Smash Burgers</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck2" checked data-category-id="2">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/2"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/2"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>chicken in mix</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck3" checked data-category-id="3">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/3"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/3"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Classic Burgers</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck4" checked data-category-id="4">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/4"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/4"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Loaded Fries (New)</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck5" checked data-category-id="5">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/5"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/5"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Wraps</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck6" checked data-category-id="6">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/6"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/6"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Chicken Tenders</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck7" checked data-category-id="7">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/7"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/7"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Premium Sides</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck8" checked data-category-id="8">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/8"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/8"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Kids</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck9" checked data-category-id="9">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/9"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/9"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Fries</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck10" checked data-category-id="10">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/10"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/10"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Shakes</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck11" checked data-category-id="11">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/11"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/11"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Dips</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck12" checked data-category-id="12">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/12"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/12"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Drinks</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck13" checked data-category-id="13">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/13"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/13"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>American</td>

                                                    <td><a href=""><button
                                                                class="btn btn-xs btn-success">Items</button></td>

                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheck14" checked data-category-id="14">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <a href="https://smashinit.co.uk/admin/categories/edit/14"><button
                                                                class="btn btn-xs btn-warning">Edit</button></a>
                                                        <a href="https://smashinit.co.uk/admin/categories/delete/14"><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
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
