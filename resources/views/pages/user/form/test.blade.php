@extends('layouts.dashboardMaster')

@section('title','| Test')

@section('script')
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/switchery.min.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/forms/styling/switch.min.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('template/material/assets/js/pages/form_checkboxes_radios.js')}}"></script>

<script type="text/javascript" src="{{asset('template/material/assets/js/plugins/ui/ripple.min.js')}}"></script>
@endsection


@section('header')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <i class="icon-arrow-left52 position-left"></i>
                <span class="text-semibold">Test Online</span>
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
@endsection

@section('content')
<form class="" action="{{url('dashboard')}}" method="gett">

    <div class="row">
        <div class="col-lg-12">
            <!-- Marketing campaigns -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h3 class="panel-title">Tes Pengetahuan Umum dan Psikotest</h3>
                    <div class="heading-elements">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table content-group">
                        <thead class="bg-blue-400">
                            <tr>
                                <th colspan="2" class="">Apa Yang di maksud Pemrograman</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="radio" name="1" class="styled" checked="checked">
                                    Jawaban A
                                </td>
                                <td>
                                    <input type="radio" name="1" class="styled">
                                    Jawaban C
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="1" class="styled">
                                    Jawaban B
                                </td>
                                <td>
                                    <input type="radio" name="1" class="styled">
                                    Jawaban D
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2" class="bg-blue-400">Apa Yang di maksud Pemrograman dasjdaksldjlasdjkasdjalksdj</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="radio" name="2" class="styled" checked="checked">
                                    Jawaban A
                                </td>
                                <td>
                                    <input type="radio" name="2" class="styled">
                                    Jawaban C
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="2" class="styled">
                                    Jawaban B
                                </td>
                                <td>
                                    <input type="radio" name="2" class="styled">
                                    Jawaban D
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2" class="bg-blue-400">Apa Yang di maksud Pemrogramanad ajksd hajskdh askjd haskjdh aksjd haskjd haskjd haskjdh askjd akjdh </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="radio" name="3" class="styled" checked="checked">
                                    Jawaban A
                                </td>
                                <td>
                                    <input type="radio" name="3" class="styled">
                                    Jawaban C
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="3" class="styled">
                                    Jawaban B
                                </td>
                                <td>
                                    <input type="radio" name="3" class="styled">
                                    Jawaban D
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="col-md-12 text-center">
                        <button type="submit" name="button" class="btn bg-teal-300">Next</button>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</form>


<!-- /radio buttons -->
@endsection
