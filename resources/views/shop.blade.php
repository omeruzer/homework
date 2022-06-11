@extends('master')
@section('content')
    <!-- CONTENT -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xl-12">
                    @include('error')
                    @include('alert')
                </div>
            </div>

            <!-- Shop Name -->
            <div class="row mt-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $shop->img }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $shop->name }}</h5>
                                <p class="card-text">{{ $shop->desc }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="" style="text-align: center;">
                        <h3>Menü</h3>
                    </div>
                </div>
            </div>

            <!-- Menü -->
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        @if ($shop->name == 'Yemekhane')
                            @if ($categories->count() > 0)
                                @foreach ($categories as $item)
                                    @if ($item->name == $today)
                                        <div class="accordion-item mt-3">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseOne{{ $item->id }}"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseOne{{ $item->id }}">
                                                    {{ $item->name }}
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne{{ $item->id }}"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingOne{{ $item->id }}"
                                                data-bs-parent="#accordionFlushExample">
                                                @if ($item->getProducts->count() > 0)
                                                    @foreach ($item->getProducts as $value)
                                                        <div class="accordion-body">
                                                            <div class="product-card">
                                                                <div class="product">
                                                                    <div class="img">
                                                                        <img src="{{ $value->img }}" alt="" srcset="">
                                                                    </div>
                                                                    <div class="product-info m-3">
                                                                        <div class="product-name">
                                                                            <h5>{{ $value->name }}</h5>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <b>{{ $value->price }}₺</b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="add-card" style="  ">
                                                                    <form action="{{ route('addCart') }}" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="id"
                                                                            value=" {{ $value->id }} ">
                                                                        <button class="btn btn-success">
                                                                            <i class="fa fa-plus"></i> Sepete Ekle
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <h3>Bu Kategoride Ürün Yok.</h3>
                                                @endif
                                            </div>
                                        </div>
                                    @else
                                        <div class="accordion-item mt-3">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseOne{{ $item->id }}"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseOne{{ $item->id }}">
                                                    {{ $item->name }}
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne{{ $item->id }}"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingOne{{ $item->id }}"
                                                data-bs-parent="#accordionFlushExample">
                                                @if ($item->getProducts->count() > 0)
                                                    @foreach ($item->getProducts as $value)
                                                        <div class="accordion-body">
                                                            <div class="product-card">
                                                                <div class="product">
                                                                    <div class="img">
                                                                        <img src="{{ $value->img }}" alt="" srcset="">
                                                                    </div>
                                                                    <div class="product-info m-3">
                                                                        <div class="product-name">
                                                                            <h5>{{ $value->name }}</h5>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <b>{{ $value->price }}₺</b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="add-card" style="">
                                                                    <button class="btn btn-success" disabled>
                                                                        Sepete Ekleyemezsiniz
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <h3>Bu Kategoride Ürün Yok.</h3>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <h3>Bu Restoranda Ürün Bulunmuyor</h3>
                            @endif
                        @else
                            @if ($categories->count() > 0)
                                @foreach ($categories as $item)
                                    <div class="accordion-item mt-3">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne{{ $item->id }}"
                                                aria-expanded="false" aria-controls="flush-collapseOne{{ $item->id }}">
                                                {{ $item->name }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne{{ $item->id }}" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne{{ $item->id }}"
                                            data-bs-parent="#accordionFlushExample">
                                            @if ($item->getProducts->count() > 0)
                                                @foreach ($item->getProducts as $value)
                                                    <div class="accordion-body">
                                                        <div class="product-card">
                                                            <div class="product">
                                                                <div class="img">
                                                                    <img src="{{ $value->img }}" alt="" srcset="">
                                                                </div>
                                                                <div class="product-info m-3">
                                                                    <div class="product-name">
                                                                        <h5>{{ $value->name }}</h5>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <b>{{ $value->price }}₺</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="add-card" style="  ">
                                                                <form action="{{ route('addCart') }}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value=" {{ $value->id }} ">
                                                                    <button class="btn btn-success">
                                                                        <i class="fa fa-plus"></i> Sepete Ekle
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <h3>Bu Kategoride Ürün Yok.</h3>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h3>Bu Restoranda Ürün Bulunmuyor</h3>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
