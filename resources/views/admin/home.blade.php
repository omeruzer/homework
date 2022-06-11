@extends('admin.master')
@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Anasayfa</h1>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box noradius noborder bg-danger">
                            <i class="far fa-user float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Ürün</h6>
                            <h1 class="m-b-20 text-white counter">{{$products}}</h1>
                            <span class="text-white">Toplam</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box noradius noborder bg-purple">
                            <i class="fas fa-download float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Kategori</h6>
                            <h1 class="m-b-20 text-white counter">{{$categories}}</h1>
                            <span class="text-white">Toplam</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box noradius noborder bg-warning">
                            <i class="fas fa-shopping-cart float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Sipariş</h6>
                            <h1 class="m-b-20 text-white counter">{{$waitOrder}}</h1>
                            <span class="text-white">Hazırlanmayı Bekleyen</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box noradius noborder bg-info">
                            <i class="far fa-envelope float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Sipariş</h6>
                            <h1 class="m-b-20 text-white counter">{{$completedOrder}}</h1>
                            <span class="text-white">Teslim Edilmiş</span>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>
    <!-- END content-page -->
@endsection
