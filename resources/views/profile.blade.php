@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/profil.css') }}">
@endsection

@section('content')
<section class="content">
    <div class="profile-card">
        <h2>Profil Akun</h2>

        <div class="field">
            <label>Username</label>
            <p>{{ $username }}</p>
        </div>

        <div class="field">
            <label>Nama Lengkap</label>
            <p>{{ $user['nama'] }}</p>
        </div>

        <div class="field">
            <label>No Telepon</label>
            <p>{{ $user['telepon'] }}</p>
        </div>

        <div class="field">
            <label>Password</label>
            <div class="password-box">
                <input type="password" value="{{ $user['password'] }}" readonly
                onclick="this.type = this.type === 'password' ? 'text' : 'password'">
            </div>
        </div>

        <div class="edit-btn">
            <a href="/edit-profil" class="btn">Edit Profil</a>
        </div>
    </div>
</section>
@endsection

