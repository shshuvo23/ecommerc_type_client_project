@extends('employee.master')

@section('title')
    Product
@endsection
@section('sectionname')
    Edit Product
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
                <h4 class="card-title">Product Edit</h4>
                <form action="{{ route('employee.product-update', ['id' => $product->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="validationServer01">Product Name</label>
                            <input type="text" class="form-control is-valid" name="name" value="{{ $product->name }}"
                                id="validationServer01" placeholder="Product Name" required>
                            <div class="valid-feedback">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="validationServer01">Category Name</label>
                                <select class="form-select is-valid" name="category_id" id="category_id">
                                    <option>Select an Option</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select><span class="bar"></span>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label" for="validationServer01">Brand Name</label>
                                <select class="form-select is-valid" name="brand_id" id="brand_id">
                                    <option>Select an Option</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"
                                            {{ $brand->id == $product->brand_id ? 'selected' : '' }}>{{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select><span class="bar"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label class="form-label" for="validationServer01">Description Titles</label>
                                    <div id="title-description-fields">
                                        @foreach (explode(',', $product->description_title) as $index => $title)
                                            <div class="title-description-pair">
                                                <input type="text" class="form-control is-valid"
                                                    name="description_title[]" value="{{ $title }}"
                                                    placeholder="Description Title" required>
                                                <textarea class="textarea_editor form-control is-valid mb-3" name="description_detail[]" rows="3"
                                                    placeholder="Enter description ..." required>{{ explode(',', $product->description_detail)[$index] }}</textarea>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" id="add-title-description" class="btn btn-outline-primary">Add
                                        More
                                        Title & Description</button>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationServer01">Product Price</label>
                                <input type="number" class="form-control is-valid" name="price"
                                    value="{{ $product->price }}" id="validationServer01" placeholder="Product Name"
                                    required>
                                <div class="valid-feedback">
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <div id="image-field" class="image">
                                <label class="form-label" for="validationServer02">Product Image</label>
                                @foreach (explode(',', $product->image) as $imageUrl)
                                    <img src="{{ asset($imageUrl) }}" alt="Product Image" class="" height="100px">
                                @endforeach
                                <input type="file" class="form-control is-valid" name="image[]" id="validationServer02"
                                    placeholder="Image">
                                <div class="valid-feedback">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="button" id="add-image" class="btn btn-outline-primary">Add More Image</button>
                        </div>
                    </div>
                    <button class="btn btn-primary text-white" type="submit">Edit Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
