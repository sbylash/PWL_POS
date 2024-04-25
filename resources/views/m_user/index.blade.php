@extends('layout.app')

@section('subtitle', 'M User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'M User')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Data Level Pengguna
                <div class="float-right"> <a class="btn btn-success" href="{{ route('m_user.create') }}"> Input User</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>User id</th>
                            <th>Level id</th>
                            <th>username</th>
                            <th>nama</th>
                            <th>password</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($useri as $m_user)
                            <tr>
                                <td>{{ $m_user->user_id }}</td>
                                <td>{{ $m_user->level_id }}</td>
                                <td>{{ $m_user->username }}</td>
                                <td>{{ $m_user->nama }}</td>
                                <td>{{ $m_user->password }}</td>
                                <td class="text-center">
                                    <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST"> <a
                                            class="btn btn-info btn-sm"
                                            href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
