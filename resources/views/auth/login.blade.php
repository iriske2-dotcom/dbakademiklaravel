@extends('layouts.app')
@section('title', 'Login - Akademi RIS')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow border-0" style="border-radius: 15px;">
            <div class="card-body p-5">
                <h3 class="text-center fw-bold text-primary mb-4">LOGIN AKADEMI RIS</h3>
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email Address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required autofocus>
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 fw-bold py-2 shadow-sm">
                        MASUK SEKARANG
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection