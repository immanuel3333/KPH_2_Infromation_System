@extends('layouts.login')

@section('title')
Login
@endsection

@section('content')
<div class="card">
    <div class="card-body">
    <a href="{{ route('login') }}" class="auth-logo align-items-center">
        <img src="{{ asset('img/logo.png') }}" class="img-fluid rounded-normal" alt="" style="width: 45px; height:45px;">
        <h4 class="pl-2 font-weight-bold">UPT KPH Wilayah II</h4>
    </a>
    <h5 class="mb-1 text-center">Masuk</h2>
    <p class="text-center" style="font-size: 12px;">Untuk melihat informasi, silahkan masuk terlebih dahulu.</p>
    <form class="mx-2" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="mb-0">Username</label>
                                    <input name="email" class="form-control form-control-sm {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" type="email">
                                    @if ($errors->has('email'))
                                     <small class="text-danger">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="mb-0">Kata Sandi</label>
                                    <input name="password" class="form-control form-control-sm {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" type="password">
                                    @if ($errors->has('password'))
                                        <small class="text-danger">{{ $errors->first('password') }}</small>
                                    @endif
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="c-remember">
                                    <label class="custom-control-label" for="c-remember">Ingat Saya</label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <a href="{{ route('password.request') }}" class="text-primary float-right">Lupa Sandi?</a>
                            </div>
                        </div>



                        <div class="d-flex justify-content-between align-items-center mt-5 mb-2">
                            <span>Belum punya akun? Ayo <a href="{{ route('register') }}" class="text-primary">Daftar</a></span>
                            <button type="submit" class="btn btn-sm btn-primary">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
