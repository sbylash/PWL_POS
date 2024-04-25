@extends('layout.app')

{{-- Customize  layout sections --}}

@section('subtitle', 'M User')
@section('content_header_title', 'M User')
@section('content_header_subtitle', 'Edit')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Level<div class="float-right"> <a class="btn btn-secondary"
                        href="{{ route('m_user.index') }}"> Kembali</a> </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ops!</strong> Error <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <form method="post" action="{{ route('m_user.update', $useri->user_id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" value= "{{ $useri->username }}" class="form-control" name="username"
                            placeholder="Masukkan Nomor username">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" value= "{{ $useri->nama }}"name="nama" class="form-control"
                            placeholder="Masukkan nama"></input>
                    </div>
                    <div class="form-group ">
                        <label for="password">Password</label>
                        <input type="password" value= "{{ $useri->password }}"name="password" class="form-control"
                            placeholder="Masukkan password"></input>
                    </div>
                    <div class="form-group">
                        <label for="level_id">Level ID</label>
                        <select name="level_id" class="form-control">
                            @foreach ($level as $l)
                                <option value="{{ $l->level_id }}">{{ $l->level_id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    <a class="btn btn-secondary" href="{{ url('/m_user') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
