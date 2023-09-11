@extends('employee.master')

@section('title')
    Product
@endsection
@section('sectionname')
    Product List
@endsection

@section('body')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Product</h4>
            <h6 class="card-subtitle">Product List</h6>
            <div class="table-responsive m-t-40">
                <table id="example23" class="display nowrap table table-hover table-striped border" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Atcion</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Atcion</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->brand->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <div style="display: flex;">
                                    @foreach (explode(",", $product->image) as $imageUrl)
                                        <img src="{{ asset($imageUrl) }}" alt="{{ $product->name }} image" height="150" width="100">
                                    @endforeach
                                </div>
                            </td>
                            <td>
                                <!-- Check if the record is a customer -->
                                <div class="col-md-6">
                                    <a href="{{route('employee.product-edit',['id' => $product->id])}}" class="badge rounded-pill bg-info">Edit</a>
                                    <a href="{{route('employee.product-delete', ['id' => $product->id])}}" class="badge rounded-pill bg-info">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
