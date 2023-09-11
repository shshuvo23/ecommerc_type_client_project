@extends('admin.master')


@section('title')
    Slider
@endsection
@section('sectionname')
    Slider List
@endsection
@section('body')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Slider</h4>
            <h6 class="card-subtitle">All Slider List</h6>
            <div class="table-responsive m-t-40">
                <table id="example23" class="display nowrap table table-hover table-striped border" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Atcion</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Atcion</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset($slider->image) }}" alt="" height="100">
                                </td>
                                <td>
                                    <a href="{{ route('slider.delete', ['id' => $slider->id]) }}"
                                        class="badge rounded-pill bg-info">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
