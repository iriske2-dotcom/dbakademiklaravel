@extends('layouts.app')

@section('title', 'Login - Akademi RIS')

@section('content')
<style>
    /* Reset padding container utama supaya background penuh */
    main.container {
        max-width: 100% !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    /* Container utama login */
    .login-wrapper {
        min-height: 90vh; 
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
        padding: 20px;
    }

    /* Kartu Login */
    .login-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        width: 100%;
        max-width: 400px;
        overflow: hidden;
    }

    .login-header {
        background: #ffffff;
        padding: 40px 20px 20px;
        text-align: center;
    }

    .login-header i {
        font-size: 50px;
        color: #007bff;
        margin-bottom: 15px;
    }

    /* Styling Form */
    .input-group-text {
        background-color: #f8f9fa;
        border-right: none;
        color: #6c757d;
    }

    .form-control {
        border-radius: 10px;
        padding: 12px;
        border: 1px solid #ced4da;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #007bff;
    }

    .btn-login {
        border-radius: 10px;
        padding: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        background-color: #007bff;
        border: none;
        transition: all 0.3s;
    }

    .btn-login:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
    }
</style>

<div class="login-wrapper">
    <div class="card login-card shadow-lg">
        <div class="login-header">
            <i class="fas fa-university"></i>
            <h2 class="fw-bold text-dark">AKADEMI RIS</h2>
            <p class="text-muted small">Sistem Informasi Akademik Mahasiswa</p>
        </div>

        <div class="card-body p-4 pb-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold small text-uppercase">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                               placeholder="Masukkan email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold small text-uppercase">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" 
                               placeholder="Masukkan password" required>
                    </div>
                </div>

                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label small text-muted" for="remember">Ingat Saya</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="small text-decoration-none fw-bold" href="{{ route('password.request') }}">Lupa?</a>
                    @endif
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-login">
                        <i class="fas fa-sign-in-alt me-2"></i> MASUK
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection