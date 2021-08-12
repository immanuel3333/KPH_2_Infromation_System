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
                        <img src="{{ asset('img/kph2.png') }}" class="img-fluid rounded-normal" alt="" style="width: 90px; height:90px;">
                        <h4 class="pl-2 font-weight-bold text-center" style="font-size: 20px;">UPT. Kesatuan Pengelolaan Hutan Wilayah - II</h4>
                </div>

                    <form class="mx-2" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h5 class="mb-1 pb-4  bold" style="font-size: 20px;">Masukkan email anda dan kami akan mengirimkan instruksi untuk mengatur ulang password anda.</h2>
                        <div class="form-group row">
                            <label class="mb-0">E-Mail</label>
                                <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class=" ml-auto">
                                <button type="submit" class="btn btn-primary">
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
