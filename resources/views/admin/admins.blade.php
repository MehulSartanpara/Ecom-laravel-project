@extends('admin.layouts.main')
@section('main-content')
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Admins</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 navbar">
                            <h6 class="m-0 font-weight-bold text-primary">Admin List</h6>
                            <a href="{{ url('admin/add-admin') }}" class="btn btn-success">Add Admin</a>
                        </div>
                        @if (session('success'))
                            <div class="myAlert-top alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('delete'))
                            <div class="myAlert-bottom alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('delete') }}
                            </div>
                        @endif
                        @if (session('update'))
                            <div class="myAlert-top alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('update') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Profile</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Role</th>
                                            <th>No. Of Product</th>
                                            <th>Edit</th>
                                            <th>Draft</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($admin as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td class="admin-table-img-content">
                                                <img class="img-profile rounded-circle admin-table-img" src="{{ asset('uploads/admin/'.$item->profile) }}">
                                            </td>
                                            <td>{{ $item->firstname }} {{ $item->lastname }}</td>
                                            <td>{{ $item->username }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->gender }}</td>
                                            <td>@if($item->role =='1')
                                                    Admin
                                                @else
                                                    Normal
                                                @endif
                                            </td>
                                            <td>{{ $item->no_of_product }}</td>
                                            <td><a href="{{url('/admin/edit-admin/'.$item->id)}}" class="btn btn-primary">Edit</a></td>
                                            <td><a href="{{url('/admin/draft-admin/'.$item->id)}}" class="btn btn-danger">Draft</a></td>
                                        </tr>
                                        @endforeach                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection