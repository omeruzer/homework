@extends('admin.master')
@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Ayarlar</h1>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        @include('error')
                        @include('alert')
                    </div>
                </div>


                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="card mb-3">

                            <div class="card-body">
                                <form action="{{route('admin.setting.edit')}}" method="post">
                                    @csrf                                    
                                    <div class="">
                                        <img style="width: 30%" src="{{$shop->img}}" alt="">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Cafe Resmi</label>
                                      <input type="text" name="img" id="" class="form-control" placeholder="Cafe Resmi" value="{{$shop->img}}" >
                                    </div>
                                    <div class="form-group">
                                      <label for="">Cafe Adı</label>
                                      <input type="text" name="name" id="" class="form-control" placeholder="Cafe Adı" value="{{$shop->name}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Cafe Açıklaması</label>
                                      <input type="text" name="desc" id="" class="form-control" placeholder="Cafe Açıklaması" value="{{$shop->desc}}">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn " style="background-color: #050C1F;color:#fff">Güncelle</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end card-->
                    </div>


                </div>


            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>
    <!-- END content-page -->
@endsection

