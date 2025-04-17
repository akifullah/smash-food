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
                                    <h4 class="card-title mb-0">Orders List</h4>
                                </div>
                                <div class="card-body">


                                    <div class="table-responsive">
                                        <table id="multi_col_order" class="table table-bordered display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>User</th>
                                                    <th>Order #</th>
                                                    <th>Price</th>
                                                    <th>Details</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>khalid jan <br> khalidjanuet@gmail.com <br> +923129093783</td>
                                                    <td>20240624667940806bc2d</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound32.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound32.00

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/8"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-primary text-primary">Dispatched</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/8"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0">Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2" selected>Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>khalid jan 2 <br> khalidjanuet2@gmail.com <br> +923129093783</td>
                                                    <td>202406246679551ebae7f</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound34.90

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound34.90

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/9"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/9"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3bbc6d6201</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound9.95

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound9.95

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/10"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/10"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3bc561ef80</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound59.70

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound59.70

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/11"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/11"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3bce985721</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound6.45

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound6.45

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/12"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/12"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3bd2bc06d5</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound9.95

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound9.95

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/13"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/13"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3bd96cd9c1</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound9.95

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound9.95

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/14"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/14"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3bf06a08ec</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound9.95

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound9.95

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/15"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/15"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3bfc53ac28</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound0.00

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/16"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/16"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3c11cdb5fd</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound9.95

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound9.95

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/17"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/17"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3c1694e68f</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound6.45

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound6.45

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/18"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/18"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3c1bdb55ae</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound9.95

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound9.95

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/19"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/19"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091366e3c4eb47378</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound9.95

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound9.95

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/20"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/20"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
                                                                class="btn btn-xs btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Akif Ullah <br> Akifullah0317@gmail.com <br> 03176186273</td>
                                                    <td>2024091466e530bfb23ac</td>
                                                    <td>
                                                        <div class="mb-1">
                                                            Order Price: &pound9.45

                                                        </div>
                                                        <div class="mb-1">
                                                            Shipping: &pound0.00

                                                        </div>
                                                        <div class="mb-1">
                                                            Total Price: &pound9.45

                                                        </div>

                                                    </td>

                                                    <td><a href="https://smashinit.co.uk/admin/order/details/21"><button
                                                                class="btn btn-xs btn-success">Details</button></td>
                                                    <td>
                                                        <div class="mb-1 text-center">
                                                            <span
                                                                class="badge rounded-pill font-weight-medium bg-light-danger text-danger">pending</span>
                                                        </div>
                                                        <div class="mt-2">
                                                            <form id="orderForm"
                                                                action="https://smashinit.co.uk/admin/order/status-change/21"
                                                                method="post">
                                                                <select name="status" id="statusSelect"
                                                                    class="form-select">
                                                                    <option value="0" selected>Pending</option>
                                                                    <option value="1">Accepted</option>
                                                                    <option value="2">Dispatched</option>
                                                                    <option value="3">Completed</option>
                                                                </select>
                                                                <input type="hidden" name="_token"
                                                                    value="MsM4KXUHMSplpoNvWlR7y2GMUYdwU6HbY0FIwZpW">
                                                            </form>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <!-- <a href=""><button class="btn btn-xs btn-warning">Edit</button></a> -->
                                                        <a href=""><button
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
