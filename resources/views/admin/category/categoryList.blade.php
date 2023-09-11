@extends('admin.master')


@section('title')
Category
@endsection
@section('sectionname')
Category List
@endsection
@section('body')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Category</h4>
        <h6 class="card-subtitle">All Category List</h6>
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped border" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Atcion</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Atcion</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{route('admin.category-delete',['id' => $category->id])}}" class="badge rounded-pill bg-info">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
