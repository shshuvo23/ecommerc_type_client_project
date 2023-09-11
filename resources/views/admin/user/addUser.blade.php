@extends('admin.master')

@section('title')
    Add User
@endsection

@section('body')

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h4 class="card-title">Add New User</h4>
                <form action="{{ route('user.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationServer01">User Name</label>
                                <input type="text" class="form-control is-valid" name="name" id="validationServer01"
                                    placeholder="User Name" required>
                                <div class="valid-feedback">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationServer01">User Email</label>
                                <input type="email" class="form-control is-valid" name="email" id="validationServer01"
                                    placeholder="User Email" required>
                                <div class="valid-feedback">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationServer01">Password</label>
                                <input type="password" class="form-control is-valid" name="password" id="validationServer01"
                                    placeholder="Password" required>
                                <div class="valid-feedback">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationServer01">Confirm Password</label>
                                <input type="password" class="form-control is-valid" name="password_confirmation"
                                    id="validationServer01" placeholder="Product Name" required>
                                <div class="valid-feedback">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary text-white" type="submit">Create New User</button>
                </form>
            </div>
        </div>
    </div>

@endsection
