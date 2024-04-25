@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'M User')
@section('content_header_title', 'M User')
@section('content_header_subtitle', 'Show')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Show User
                <a class="btn btn-secondary float-right" href="{{ route('m_user.index') }}">Kembali</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>User ID:</strong>
                            {{ $useri->user_id }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Level ID:</strong>
                            {{ $useri->level_id }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Username:</strong>
                            {{ $useri->username }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Nama:</strong>
                            {{ $useri->nama }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Password:</strong>
                            {{ $useri->password }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
