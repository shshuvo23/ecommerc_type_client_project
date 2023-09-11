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
                            <th>Description</th>
                            <th>Image</th>
                            <th>Atcion</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Atcion</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$blog->title}}</td>
                            <td>
                                <div style=" height: 100px; width: 300px; overflow: hidden; text-overflow: ellipsis;">
                                    {!! substr($blog->long_description, 0, 300) . '...' !!}
                                </div>
                            </td>
                            <td>
                                <div>
                                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }} image" height="150" width="150">
                                </div>
                            </td>
                            <td>
                                <!-- Check if the record is a customer -->
                                <div class="col-md-6">
                                    <a href="{{route('employee.blog-edit', ['id' => $blog->id])}}" class="badge rounded-pill bg-info">Edit</a>
                                    <a href="{{route('employee.blog-delete', ['id' => $blog->id])}}" class="badge rounded-pill bg-info">Delete</a>
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
