@extends('admin.master')

@section('title')
    User
@endsection

@section('sectionname')
    User-list
@endsection

@section('body')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">User</h4>
            <h6 class="card-subtitle">All User List</h6>
            <div class="table-responsive m-t-40">
                <table id="example23" class="display nowrap table table-hover table-striped border" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Role</th>
                            <th>Atcion</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Role</th>
                            <th>Atcion</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->usertype == 1)
                                        Admin
                                    @else
                                        Customer
                                    @endif
                                </td>
                                <td>
                                    @if ($user instanceof \App\Models\User)
                                        <!-- Check if the record is a customer -->
                                        <div class="col-md-6">
                                            <a href="{{ route('user.makeAdmin', ['id' => $user->id]) }}"
                                                class="badge rounded-pill bg-info">Make Admin</a>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
