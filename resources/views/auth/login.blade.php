@extends('layouts.app')

@section('title', 'Login - Akademi RIS')

@section('content')
<style>
    /* Gradient Background untuk halaman login saja */
    body {
        background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
    .login-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        overflow: hidden;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }
    .login-header {
        background: #fff;
        padding: 40px 30px 20px;
        text-align: center;
    }
    .login-header i {
        font-size: 50px;
        color: #007bff;
        margin-bottom: 15px;
    }
    .form-control {
        border-radius: 10px;
        padding: 12px 15px;
        border: 1px solid #ddd;
    }
    .form-control:focus {
        box-shadow: 0 0 0 0.25 row rgba(0, 123, 255, 0.25);
        border-color: #007bff;
    }
    .btn-login {
        border-radius: 10px;
        padding: 12px;
        font-weight: bold;
        text-uppercase: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s;
    }
    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card login-card animate__animated animate__fadeInUp">
                <div class="login-header">
                    <i class="fas fa-university"></i>
                    <h3 class="fw-bold text-dark">AKADEMI RIS</h3>
                    <p class="text-muted small">Silakan login untuk mengelola data mahasiswa</p>
                </div>
                
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Alamat Email</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="fas fa-envelope text-muted"></i></span>
                                <input type="email" name="email" class="form-control border-start-0 @error('email') is-invalid @enderror" 
                                       placeholder="nama@email.com" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="fas fa-lock text-muted"></i></span>
                                <input type="password" name="password" class="form-control border-start-0" 
                                       placeholder="********" required>
                            </div>
                        </div>

                        <div class="mb-4 d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label small" for="remember">Ingat Saya</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="small text-decoration-none" href="{{ route('password.request') }}">Lupa Password?</a>
                            @endif
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100 btn-login shadow-sm">
                                <i class="fas fa-sign-in-alt me-2"></i> MASUK KE SISTEM
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="card-footer bg-light border-0 py-3 text-center">
                    <span class="small text-muted">&copy; {{ date('Y') }} Akademi RIS. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection