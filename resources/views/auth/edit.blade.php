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
                            <form class="mx-2" method="POST" action="{{ route('password-edit') }}" id="logForm">
                                @csrf
                                @method("PATCH")

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                           <label for="old-password">Password Lama</label>
                                           <input type="password" name="old_password" id="old_password" class="form-control">
                                        </div>
                                        @error('old_password')
                                            <div class="text-danger mt-2">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Password Baru</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                            @error('password')
                                            <div class="text-danger mt-2">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password_confirmation">Konfirmasi Password</label>
                                           <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                           @error('password_confirmation')
                                            <div class="text-danger mt-2">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-sm btn-primary" style="float:right">Ganti Password</button>
                                </div>
                            </form>
                            <div>
                                <a href="{{url('/home')}}" >
                                    <button type="submit" class="btn btn-sm bg-warning mr-4" style="float:right">Kembali</button>
                                </a>
                            </div>
                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
