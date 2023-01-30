@extends('admin.layouts.main')
@section('main-content')
<div class="container-fluid">
<h1 class="h3 mb-2 text-gray-800">Update Admin</h1>
<div class="card shadow mb-8">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between navbar">
                  <h6 class="m-0 font-weight-bold text-primary">Update Admin</h6>
                  <a href="{{ url('admin/admins') }}" class="btn btn-success">Back</a>
                </div>
                <div class="card-body">
                  <form action="{{ url('admin/update-admin/'.$admin->id) }}" method="post" enctype="multipart/form-data">
                   @csrf 
                   @method('PUT')
                    <div class="form-group">
                      <label for="firstname">First Name</label>
                      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter First Name" value="{{ $admin->firstname }}">
                      <small id="emailHelp" class="form-text text-danger">
                            @error('firstname')
                                {{ $message }}
                            @enderror
                      </small>
                    </div>
                    <div class="form-group">
                      <label for="lastname">Last Name</label>
                      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Last Name" value="{{ $admin->lastname }}">
                      <small id="emailHelp" class="form-text text-danger">
                            @error('lastname')
                                {{ $message }}
                            @enderror
                      </small>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{ $admin->email }}">
                      <small id="emailHelp" class="form-text text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                      </small>
                    </div>
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="{{ $admin->username }}">
                      <small id="emailHelp" class="form-text text-danger">
                            @error('username')
                                {{ $message }}
                            @enderror
                      </small>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="password" class="form-control" id="password" placeholder="Enter password" value="{{ $admin->password }}">
                      <small id="emailHelp" class="form-text text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                      </small>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control mb-3" name="gender">
                            <option value="Male" @if($admin->gender =="Male") selected @endif >Male</option>
                            <option value="Female" @if($admin->gender =="Female") selected @endif >Female</option>
                        </select>
                        <small id="emailHelp" class="form-text text-danger">
                            @error('gender')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="Role">Role</label>
                        <select class="form-control mb-3" name="role">
                            <option value="0" @if($admin->role =="0") selected @endif >Normal</option>
                            <option value="1" @if($admin->role =="1") selected @endif >Admin</option>
                        </select>
                        <small id="emailHelp" class="form-text text-danger">
                            @error('role')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="no_of_product" class="form-control" id="no_of_product" placeholder="Enter no_of_product" value="{{ $admin->no_of_product }}">
                      <small id="emailHelp" class="form-text text-danger">
                            @error('no_of_product')
                                {{ $message }}
                            @enderror
                      </small>
                    </div>
                    <div class="form-group">
                        <label for="customFile">Profile</label>
                        <input type="file" name="profile" class="form-control" style="padding-bottom: 35px;">
                        <img class="img-profile rounded-circle admin-table-img" src="{{ asset('uploads/admin/'.$admin->profile) }}">
                        <small id="emailHelp" class="form-text text-danger">
                            @error('profile')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="no_of_product" class="form-control" value="0">
                    </div>
                    <div class="text-right">
                      <button type="submit" class="btn btn-primary">Update Admin</button>
                    </div>
                  </form>
                </div>
              </div>
</div>
<!-- /.container-fluid -->
@endsection