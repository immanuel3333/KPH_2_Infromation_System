@extends('layouts.login')

@section('title')
Login
@endsection

@section('content')

        <div class="card">
            <div class="card-body">
            <div class="auth-logo align-items-center">
                <img src="{{ asset('img/kph2.png') }}" class="img-fluid rounded-normal" alt="" style="width: 90px; height:90px;">
                <h4 class="pl-2 font-weight-bold text-center" style="font-size: 20px;">UPT. Kesatuan Pengelolaan Hutan Wilayah - II</h4>
            </div>
            <h5 class="mb-1 text-center bold" style="font-size: 20px;">Masuk</h2>
                            <form class="mx-2" method="POST" action="{{ route('proses_login') }}" id="logForm">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="mb-0">Username</label>
                                            <input name="name" class="form-control form-control-sm {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" type="name">
                                            @if ($errors->has('name'))
                                            <small class="text-danger">{{ $errors->first('name') }}</small>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="mb-0">Kata Sandi</label>
                                            <input name="password" class="form-control form-control-sm {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" type="password">
                                            @if ($errors->has('password'))
                                                <small class="text-danger">{{ $errors->first('password') }}</small>
                                            @endif
                                        </div>

                                    </div>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                </div>



                                <div class="d-flex justify-content-between align-items-center mt-5 mb-2">
                                    <span><!--Belum punya akun? Ayo <a href="" class="text-primary">Daftar--></a></span>
                                    <button type="submit" class="btn btn-sm btn-primary">Masuk</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
