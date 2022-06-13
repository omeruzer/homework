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

            <div class="row">
                <div class="col-md-12">
                    <div class="" style="text-align: center;">
                        <h3>Sepet</h3>
                    </div>
                </div>
            </div>

            @if (Cart::count() > 0)
                <div class="row">
                    <div class="col-md-12">
                        <div class="" style="text-align: end;">
                            <form action="{{ route('emptycart') }}" method="post">
                                @csrf
                                <button class="btn btn-info">Sepeti Boşalt</button>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Table -->
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ürün Adı</th>
                                    <th>Ürün Fiyatı</th>
                                    <th>Adet</th>
                                    <th>Toplam</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}₺</td>
                                        <td>
                                            <div class="qty">
                                                <form action="{{ route('decrease', $item->rowId) }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product" value={{ $item->id }}>
                                                    <button class="btn btn-danger minus"><i
                                                            class="fa fa-minus"></i></button>
                                                </form>
                                                <label>{{ $item->qty }}</label>
                                                <form action="{{ route('increase', $item->rowId) }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product" value={{ $item->id }}>
                                                    <button class="btn btn-success plus"><i
                                                            class="fa fa-plus"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $item->qty * $item->price }}₺</td>
                                        <td>
                                            <form action="{{ route('removecart', $item->rowId) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Kaldır</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-md-12">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Ödeme</h5>
                                    <p class="card-text">Adet : {{ Cart::count() }} </p>
                                    <p class="card-text">Toplam : {{ Cart::subtotal() }} ₺</p>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Sipariş Ver ({{ Cart::subtotal() }}₺)
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ route('toPay') }}" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Sipariş Ver</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Okul No</label>
                                            <input type="text" name="schollNo" class="form-control" placeholder="Okul No"
                                                autocomplete="off" value="{{ auth()->user()->scholl_no }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="İsim Soyisim"
                                                autocomplete="off" value="{{ auth()->user()->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">E-mail</label>
                                            <input type="text" name="email" class="form-control" placeholder="E-mail"
                                                autocomplete="off" value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Kapat</button>
                                        <input type="submit" class="btn btn-info"
                                            value="Sipariş Ver ({{ Cart::subtotal() }}₺)">
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">Sepetiniz Boş</div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
