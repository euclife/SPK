@extends('layouts.dashboardMaster')
@section('title','| Lowongan')
@section('lowonganActive','active')

@section('script')
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/selects/select2.min.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/pages/datatables_basic.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/ripple.min.js')}}"></script>
@endsection
@section('header')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <i class="icon-arrow-left52 position-left"></i>
                <span class="text-semibold">Home</span> - Lowongan
                <small class="display-block">List Lowongan yang tersedia!</small>
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
@endsection

@section('content')
<div class="panel panel-flat">
    <div class="panel-heading">
        <a href="{{url('admin/lowongan/create')}}" class="btn btn-primary"> <i class="icon-plus3"></i> Tambah Lowongan</a>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover" id="lowongan">
            <thead class="bg-teal-400">
                <tr>
                    <th>No</th>
                    <th>Posisi</th>
                    <th>Deadline</th>
                    <th>Keterangan</th>
                    <th>Syarat</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<div id="mdlSyarat" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title" id="modalTitle"></h6>
            </div>

            <div class="modal-body">
                <h6 class="text-semibold">Syarat Pelamar</h6>
                <hr>
                <div id="syarat">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on("click", ".btn-lowongan", function() {
            var id = $(this).data('id');
            var posisi = $(this).data('posisi');
            var url = '{{url('api/syaratlowongan/')}}/'+id;
            $.ajax({
                url: url,
                type: 'GET',
                datatype: 'json',
                success: function(data) {
                    $('#syarat').empty();
                    $('#modalTitle').empty();
                    $('#modalTitle').text(posisi);
                    for (var i = 0; i < data.length; i++) {
                        $('#syarat').append("<p>" + (i + 1) + " " + data[i].nama_syarat + "</p>");
                    }
                    $('#mdlSyarat').modal('show');
                }
            });

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
                sZeroRecords: "Tidak ditemukan data lowongan yang sesuai",
                sEmptyTable: "Tidak ada data lowongan yang tersedia pada tabel ini",
                sInfo: "Menampilkan _START_-_END_ dari _TOTAL_ data",
                paginate: {
                    'first': 'Pertama',
                    'last': 'Terakhir',
                    'next': 'Sebelumnya',
                    'previous': 'Selanjutnya'
                }
            }
        });

        table = $('#lowongan').DataTable({
            responsive: "true",
            processing: "true",
            serverSide: "true",
            lengthMenu: [
                [10, 20, 50],
                [10, 20, 50]
            ],
            ajax: '{{url('admin/lowongan')}}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'posisi',
                    name: 'posisi'
                },
                {
                    data: 'waktu',
                    name: 'waktu'
                },
                {
                    data: 'keterangan',
                    name: 'keterangan'
                },
                {
                    data: 'syarat',
                    name: 'syarat'
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
        $('#lowongan').on('click','.btn-hapus[data-remove]',function(e){
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
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url : url,
                        type: 'DELETE',
                        dataType : 'json',
                        data : { method : '_DELETE' , submit : true},
                        success:function(data){
                            if (data == 'success') {
                                swal("Terhapus!", "Data Sudah Terhapus", "success");
                                table.ajax.reload(null,false);
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
