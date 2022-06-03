@extends('master')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row" >
                <div class="col-md-3 login">
                    <div class="login-form" >
                        <div class="row" >
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-xl-6">
                                        @include('error')
                                        @include('alert')
                                    </div>
                                </div>
                                <h4>Üye Ol</h4>
                            </div>
                        </div>
                        <form action="{{route('registerPost')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Okul No</label>
                                <input type="text" name="scholl_no" id="" class="form-control" placeholder="Okul No">
                            </div>
                            <div class="form-group">
                                <label for="">Ad Soyad</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="Ad Soyad">
                            </div>
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" name="email" id="" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Şifre</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="Şifre">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Şifre Tekrar</label>
                                <input type="password" name="password_confirmation" id="" class="form-control" placeholder="Şifre Tekrar">
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-info">Üye Ol</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
