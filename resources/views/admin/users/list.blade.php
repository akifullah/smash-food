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
                                    <h4 class="card-title mb-0">Users List</h4>

                                </div>
                                <div class="card-body">


                                    <div class="table-responsive">
                                        <table id="multi_col_order" class="table table-bordered display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Phone #</th>
                                                    <th>Email</th>
                                                    <th>address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td></td>
                                                    <td>Webspires</td>
                                                    <td>03448959905</td>
                                                    <td>webspires@gmail.com</td>
                                                    <td>Higginshaw Ln,</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/12"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/12"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>Akif Ullah</td>
                                                    <td>03176186273</td>
                                                    <td>akifullah@gmail.com</td>
                                                    <td>Charsadda, KP, Pakistan</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/13"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/13"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><img src="https://smashinit.co.uk/user_images/user_1715886910.jpg"
                                                            style="width:50px;" alt=""></td>
                                                    <td>khalid jan</td>
                                                    <td>+923129093783</td>
                                                    <td>khalid@gmail.com</td>
                                                    <td>Peshawar, pakistan</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/14"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/14"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td></td>
                                                    <td>Akif Ullah</td>
                                                    <td>03176186273</td>
                                                    <td>akif@gmail.com</td>
                                                    <td>Charsadda, KP, Pakistan</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/15"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/15"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td></td>
                                                    <td>test</td>
                                                    <td>123</td>
                                                    <td>test@mail.com</td>
                                                    <td>123</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/16"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/16"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td></td>
                                                    <td>Akif Ullah</td>
                                                    <td>03176186273</td>
                                                    <td>akifullah0@gmail.com</td>
                                                    <td>Charsadda, KP, Pakistan</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/17"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/17"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td></td>
                                                    <td>khalid jan</td>
                                                    <td>+923129093783</td>
                                                    <td>khalidjanuet@gmail.com</td>
                                                    <td>UK</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/18"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/18"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td></td>
                                                    <td>khalid jan 2</td>
                                                    <td>+923129093783</td>
                                                    <td>khalidjanuet2@gmail.com</td>
                                                    <td>UK</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/19"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/19"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td></td>
                                                    <td>* * * Apple iPhone 15 Free:
                                                        http://luminance-tn.com/uploads/zvszup.php * * *
                                                        hs=b84b39ea5a8991ddcae4fd50577c068a*</td>
                                                    <td>718226320203</td>
                                                    <td>okebepu@merepost.com</td>
                                                    <td>pdq8qk</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/20"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/20"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td></td>
                                                    <td>Akif Ullah</td>
                                                    <td>03176186273</td>
                                                    <td>akifullah0340@gmail.com</td>
                                                    <td>Charsadda, KP, Pakistan</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/21"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/21"
                                                                class="btn btn-xs btn-danger ms-2">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td></td>
                                                    <td>pq6ae999552a0d2dca14d62e2bc8b764d377b1dd6cpq</td>
                                                    <td>pqf6be6ca910984ef05a237a180d464ceb8847c14apq</td>
                                                    <td>kgjt_6d612f98263d21dbdde0546a1f0f192cf2ab31eb@trustmailticket.com
                                                    </td>
                                                    <td>pqc662180230cad14787d4ab7e77aa08681ce783fapq</td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="https://smashinit.co.uk/admin/users/edit/22"
                                                                class="btn btn-xs btn-warning">Edit</a>
                                                            <a href="https://smashinit.co.uk/admin/users/delete/22"
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
