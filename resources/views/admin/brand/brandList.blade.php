@extends('admin.master')


@section('title')
    Brand
@endsection
@section('sectionname')
    Brand List
@endsection
@section('body')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Brand</h4>
            <h6 class="card-subtitle">All Brand List</h6>
            <div class="table-responsive m-t-40">
                <table id="example23" class="display nowrap table table-hover table-striped border" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Atcion</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Atcion</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    <img src="{{ asset($brand->image) }}" alt="" height="100">
                                </td>
                                <td>
                                    <a href="{{route('admin.brand-delete', ['id' => $brand->id])}}" class="badge rounded-pill bg-info">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
