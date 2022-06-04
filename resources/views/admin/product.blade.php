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
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="float-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i
                                    class="fa fa-plus"></i> Ekle</button>
                        </div>
                    </div>
                </div>



                {{-- Modal --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-hover display">
                                        <thead>
                                            <tr>
                                                <th>Resim</th>
                                                <th>Ürün Adı</th>
                                                <th>Kategori</th>
                                                <th>Fiyat</th>
                                                <th>İşlemler</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                                <tr>
                                                    <td style="width: 10%;">
                                                        <img style="width: 100%" src="{{ $item->img }}" alt="">
                                                    </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->getCategory->name }}</td>
                                                    <td>{{ $item->price }}₺</td>
                                                    <td>
                                                        <div class="">
                                                            <button class="btn btn-warning"><i
                                                                    class="fa fa-edit"></i></button>
                                                            <button class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

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
