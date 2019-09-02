@extends('layouts.dashboardMaster')
@section('title','| Dashboard Admin')
@section('soalActive','active')

@section('script')

<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/switchery.min.js')}}">
</script>
<script type="text/javascript"
    src="{{asset('template/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/pickers/daterangepicker.js')}}">
</script>
<link href="{{asset('template/material/assets/css/icons/fontawesome/styles.min.css')}}" rel="stylesheet"
    type="text/css">
<script type="text/javascript" src="{{asset('template/material/assets/js/core/app.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/ripple.min.js')}}"></script>
<script type="text/javascript"
    src="{{asset('template/material/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/selects/select2.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('template/material/assets/js/pages/datatables_basic.js')}}"></script>

<!-- /theme JS files -->
@endsection
@section('header')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <i class="icon-arrow-left52 position-left"></i>
                <span class="text-semibold">Admin</span> - Soal
                <small class="display-block">Hello, {{ Auth::user()->name }}!</small>
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
@endsection

@section('content')
<!-- Dashboard content -->
<div class="panel panel-flat">
    <div class="panel-heading">
        <a href="{{url('admin/soal/create')}}" class="btn btn-primary"> <i class="icon-plus3"></i> Tambah Soal</a>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover" id="soal">
            <thead class="bg-teal-400">
                <tr>
                    <th>No</th>
                    <th>Soal</th>
                    <th>Kunci</th>
                    <th>Score</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<!-- /dashboard content -->
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.extend($.fn.dataTable.defaults, {
            autoWidth: false,
            columnDefs: [{
                "searchable": false,
                "orderable": false,
                "targets": 4
            }],
            dom: '<"datatable-header"fBl><"datatable-scroll-wrap"tr><"datatable-footer"ip>',
            language: {
                search: '<span>Cari :</span> _INPUT_',
                searchPlaceholder: '',
                lengthMenu: '<span>Menampilkan :</span> _MENU_ <span>halaman</span>',
                sZeroRecords: "Tidak ditemukan data soal yang sesuai",
                sEmptyTable: "Tidak ada data soal yang tersedia pada tabel ini",
                sInfo: "Menampilkan _START_-_END_ dari _TOTAL_ data",
                paginate: {
                    'first': 'Pertama',
                    'last': 'Terakhir',
                    'next': 'Sebelumnya',
                    'previous': 'Selanjutnya'
                }
            }
        });

        table = $('#soal').DataTable({
            responsive: "true",
            processing: "true",
            serverSide: "true",
            lengthMenu: [
                [10, 20, 50],
                [10, 20, 50]
            ],
            ajax: '{{url("admin/soal")}}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'pertanyaan',
                    name: 'pertanyaan'
                },
                {
                    data: 'kunci',
                    name: 'kunci'
                },
                {
                    data: 'score',
                    name: 'score'
                },
                {
                    data: 'action',
                    name: 'action',
                    className: "text-center"
                },
            ]
        });
        // End Ajax Table

        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity,
            width: 'auto'
        });

        //Deleting data
        $('#soal').on('click', '.btn-hapus[data-remove]', function (e) {
            e.preventDefault();
            var url = $(this).data('remove');
            swal({
                    title: "Apakah Anda ingin Menghapus Data ini?",
                    text: "Data kunjungan akan di Hapus",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: "Ya",
                    cancelButtonText: "Tidak",
                    closeOnConfirm: false,
                    closeOnCancel: true,
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            dataType: 'json',
                            data: {
                                method: '_DELETE',
                                submit: true
                            },
                            success: function (data) {
                                if (data == 'success') {
                                    swal("Terhapus!", "Data Sudah Terhapus", "success");
                                    table.ajax.reload(null, false);
                                }
                            }
                        });
                    }
                });
        });
        // End Deleting Data
    });
</script>

@endsection
