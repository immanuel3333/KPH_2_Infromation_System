@extends('layouts.login')

@section('title')
Reset
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card" style="width: 1000px;height: 360px;">
                <div class="card-body">
                <div class="auth-logo align-items-center">
                    <img src="{{ asset('img/Logo.png') }}" class="img-fluid rounded-normal" alt="" style="width: 90px; height:90px;">
                    <h4 class="pl-2 font-weight-bold text-center" style="font-size: 20px;">UPT. Kesatuan Pengelolaan Hutan Wilayah - II</h4>
                </div>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="pl-5 pr-4" style="width: 700px">
                                <p>Masukkan email anda dan kami akan mengirimkan intruksi untuk mengatur ulang password anda</p>
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="float:right">
                                    {{ __('Kirim') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>


@endsection
