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
                                <h4>Bilgilerim</h4>
                            </div>
                        </div>
                        <form action="{{ route('infoPost') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Ad Soyad</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="Ad Soyad" value="{{$info->name}}">
                            </div>
                            <div class="form-group">
                                <label for="">Okul No</label>
                                <input type="text" name="scholl_no" id="" class="form-control" placeholder="Okul No" value="{{$info->scholl_no}}">
                            </div>
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" name="email" id="" class="form-control" placeholder="E-mail" value="{{$info->email}}">
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
