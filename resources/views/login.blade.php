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
                                <h4>Giriş Yap</h4>
                            </div>
                        </div>
                        <form action="{{ route('loginPost') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" name="email" id="" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Şifre</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="Şifre">
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-info">Giriş Yap</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
