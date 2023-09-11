@extends('employee.master')

@section('title')
    Blog
@endsection
@section('sectionname')
    Edit Blog
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
                <h4 class="card-title">Blog Add</h4>
                <form action="{{ route('employee.blog-update', ['id' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="validationServer01">Blog Name</label>
                            <input type="text" class="form-control is-valid" name="title" value="{{$blog->title}}" id="validationServer01"
                                placeholder="Product Name" required>
                            <div class="valid-feedback">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="form-label" for="validationServer01">Blog Description</label>
                                <textarea class="textarea_editor form-control is-valid" name="long_description" rows="15" placeholder="Enter text ...">{{$blog->long_description}}</textarea>
                            </div>
                            <div class="valid-feedback">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label class="form-label" for="validationServer02">Blog Image</label>
                            <input type="file" class="form-control is-valid" name="image" id="validationServer02"
                                placeholder="Image">
                            <img src="{{asset($blog->image)}}" alt="" height="150" width="150">
                            <div class="valid-feedback">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary text-white" type="submit">Edit New Blog</button>
                </form>
            </div>
        </div>
    </div>
@endsection
