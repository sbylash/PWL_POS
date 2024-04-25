@extends('layout.app')

{{-- Customize  layout sections --}}

@section('subtitle', 'M User')
@section('content_header_title', 'M User')
@section('content_header_subtitle', 'Create')
@section('content')
    <div class="container">
        <div class="card card-warning">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-header">
                <h3 class="card-title">Membuat Daftar User</h3>
                <div class="float-right"> <a class="btn btn-secondary" href="{{ route('m_user.index') }}"> Kembali</a> </div>
            </div>

            <form method="post" action="{{ route('m_user.store') }}">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan username"></input>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama"></input>
                    </div>
                    <div class="form-group ">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password"></input>
                    </div>
                    <div class="form-group">
                        <label for="level_id">Level ID</label>
                        <select name="level_id" class="form-control">
                            @foreach ($level as $l)
                                <option value="{{ $l->level_id }}">{{ $l->level_id }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
