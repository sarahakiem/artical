@extends('layouts.admin_temp')

  @section('admin_content')
    <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Users</h2>
                <a href="add_user.html" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new user</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Registration Date</th>
                            <th scope="col">FullName</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Active</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">18 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark33</td>
                            <td>mark@example.com</td>
                            <td>+201123474</td>
                            <td>YES</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">18 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark33</td>
                            <td>mark@example.com</td>
                            <td>_</td>
                            <td>YES</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">28 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark28</td>
                            <td>mark@example.com</td>
                            <td>+201123474</td>
                            <td>No</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">18 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark33</td>
                            <td>mark@example.com</td>
                            <td>+201123474</td>
                            <td>No</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">18 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark33</td>
                            <td>mark@example.com</td>
                            <td>+201123474</td>
                            <td>No</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">22 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark22</td>
                            <td>mark@example.com</td>
                            <td>+201123474</td>
                            <td>No</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">18 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark33</td>
                            <td>mark@example.com</td>
                            <td>+201123474</td>
                            <td>No</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">18 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark33</td>
                            <td>mark@example.com</td>
                            <td>+201123474</td>
                            <td>No</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">18 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark33</td>
                            <td>mark@example.com</td>
                            <td>+201123474</td>
                            <td>No</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">18 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark33</td>
                            <td>mark@example.com</td>
                            <td>_</td>
                            <td>No</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">18 Jul 2024</th>
                            <td>Mark Henry</td>
                            <td>Mark33</td>
                            <td>mark@example.com</td>
                            <td>_</td>
                            <td>YES</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="edit_user.html"><img src="assests/images/edit-svgrepo-com.svg"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection