@extends('master')
@section('content')
    <div class="content">
        <div class="container">

            <!-- SLİDER -->
            <div class="row mt-3">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/800/280/?image=52" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/800/280/?image=52" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/800/280/?image=52" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="" style="text-align: center;">
                        <h3>Restorantlar</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                @foreach ($shops as $item)
                    <div class="col-md-4 mt-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$item->img}}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->name}}</h5>
                                <a href="{{route('shop',[$item->id])}}" class="btn btn-primary">Sipariş Ver</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
