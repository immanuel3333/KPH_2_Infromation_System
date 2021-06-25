@extends('layouts.login')

@section('title')
Password baru
@endsection

@section('content')
            <div class="card">
                <div class="card-body">
                    <div class="auth-logo align-items-center">
                        <img src="{{ asset('img/kph.png') }}" class="img-fluid rounded-normal" alt="" style="width: 90px; height:90px;">
                        <h4 class="pl-2 font-weight-bold text-center" style="font-size: 20px;">UPT. Kesatuan Pengelolaan Hutan Wilayah - II</h4>
                    </div>
                    <h5 class="mb-1  bold" style="font-size: 20px;">Silahkan Masukkan sandi anda</h2>
                    <form class="mx-2" method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="mb-0">Sandi</label>
                                <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="mb-0">Konfirmasi Kata Sandi</label>
                                <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                        
                        <div class="form-group row mb-0">
                            <div class="ml-auto pr-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
   
@endsection
