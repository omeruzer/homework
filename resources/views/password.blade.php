@extends('master')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 login">
                    <div class="login-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-xl-12">
                                        @include('error')
                                        @include('alert')
                                    </div>
                                </div>
                                <h4>Şifremi Değiştir</h4>
                            </div>
                        </div>
                        <form action="{{ route('passwordPost') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Eski Şifre</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="Eski Şifre">
                            </div>
                            <div class="form-group">
                                <label for="">Yeni Şifre</label>
                                <input type="password" name="newPassword" id="" class="form-control" placeholder="Yeni Şifre">
                            </div>
                            <div class="form-group">
                                <label for="">Yeni Şifre Tekrar</label>
                                <input type="password" name="newPassword_confirmation" id="" class="form-control" placeholder="Yeni Şifre Tekrar">
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-info">Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
