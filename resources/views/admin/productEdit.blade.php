@extends('admin.master')
@section('content')
    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Ürünler</h1>
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

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <form action="{{route('admin.product.editPost',[$product->id])}}" method="post" >
                                    @csrf
                                    <div class="form-group" style="display: grid">
                                        <label for="exampleInputEmail1">Ürün Resmi</label>
                                        <img style='width: 50%' src="{{$product->img}}" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ürün Resmi</label>
                                        <input type="text" name="img"  class="form-control" id="exampleInputEmail1" placeholder="Ürün Resmi" required value="{{$product->img}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ürün Adı</label>
                                        <input type="text" name="name"  class="form-control" id="exampleInputEmail1" placeholder="Ürün Adı" required value="{{$product->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kategori</label>
                                        <select class="form-control" name="category_id" id="">
                                            @foreach ($categories as $item)
                                                <option {{$product->category_id == $item->id ? 'selected' : ''}}   value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Fiyat</label>
                                        <input type="text" name="price"  class="form-control" id="exampleInputEmail1" placeholder="Fiyat" required value="{{$product->price}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Güncelle</button>
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
@section('footer')
    <!-- BEGIN Java Script for this page -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script>
        // START CODE FOR BASIC DATA TABLE 
        $(document).ready(function() {
            $('#example1').DataTable();
        });
        // END CODE FOR BASIC DATA TABLE 


        // START CODE FOR Child rows (show extra / detailed information) DATA TABLE 
        function format(d) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                '<tr>' +
                '<td>Full name:</td>' +
                '<td>' + d.name + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Extension number:</td>' +
                '<td>' + d.extn + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Extra info:</td>' +
                '<td>And any further details here (images etc)...</td>' +
                '</tr>' +
                '</table>';
        }

        $(document).ready(function() {
            var table = $('#example2').DataTable({
                "ajax": "assets/data/dataTablesObjects.txt",
                "columns": [{
                        "className": 'details-control',
                        "orderable": false,
                        "data": null,
                        "defaultContent": ''
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "position"
                    },
                    {
                        "data": "office"
                    },
                    {
                        "data": "salary"
                    }
                ],
                "order": [
                    [1, 'asc']
                ]
            });

            // Add event listener for opening and closing details
            $('#example2 tbody').on('click', 'td.details-control', function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });
        });
        // END CODE FOR Child rows (show extra / detailed information) DATA TABLE 		



        // START CODE Show / hide columns dynamically DATA TABLE 		
        $(document).ready(function() {
            var table = $('#example3').DataTable({
                "scrollY": "350px",
                "paging": false
            });

            $('a.toggle-vis').on('click', function(e) {
                e.preventDefault();

                // Get the column API object
                var column = table.column($(this).attr('data-column'));

                // Toggle the visibility
                column.visible(!column.visible());
            });
        });
        // END CODE Show / hide columns dynamically DATA TABLE 	


        // START CODE Individual column searching (text inputs) DATA TABLE 		
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#example4 thead th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" />');
            });

            // DataTable
            var table = $('#example4').DataTable();

            // Apply the search
            table.columns().every(function() {
                var that = this;

                $('input', this.header()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
        // END CODE Individual column searching (text inputs) DATA TABLE
    </script>
    <!-- END Java Script for this page -->
@endsection
@section('head')
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />
    <style>
        td.details-control {
            background: url('assets/plugins/datatables/img/details_open.png') no-repeat center center;
            cursor: pointer;
        }

        tr.shown td.details-control {
            background: url('assets/plugins/datatables/img/details_close.png') no-repeat center center;
        }

    </style>
@endsection
