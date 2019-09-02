@extends('layouts.dashboardMaster')

@section('title','| Lowongan')
@section('soalActive','active')

@section('script')
<script type="text/javascript"
    src="{{ asset('template/material/assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/material/assets/js/plugins/forms/styling/uniform.min.js') }}">
</script>

<script type="text/javascript" src="{{ asset('template/material/assets/js/core/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/material/assets/js/pages/editor_summernote.js') }}"></script>

<script type="text/javascript" src="{{ asset('template/material/assets/js/plugins/ui/ripple.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template/material/assets/js/pages/form_checkboxes_radios.js') }}">
</script>

@endsection


@section('header')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <a href="{{url('admin/lowongan')}}"><i class="icon-arrow-left52 position-left"></i></a>
                <span class="text-semibold">Admin</span> - Tambah Soal
            </h4>
        </div>

    </div>
</div>
<!-- /page header -->
@endsection

@section('content')

<h6 class="content-group text-semibold">
    Tambah Soal
</h6>
<div class="row">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <form action="{{ url('admin/soal/edit',$soal->id_soal) }}" method="POST" class="form-horizontal"
            enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                <h5 class="panel-title">Pertanyaan</h5>
                <textarea class="summernote" name="pertanyaan">{{ $soal->pertanyaan }}
                </textarea>
                @if ($errors->has('pertanyaan'))
                <div class="alert bg-danger-400 alert-styled-left">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                            class="sr-only">Close</span></button>
                    <span class="text-semibold">{{ $errors->first('pertanyaan') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-2">
                        <h5> Jawaban A.</h5>
                    </div>
                    <div class="col-md-10">
                        <textarea class="summernote" name="a">
                            {{ $soal->pila }}
                        </textarea>
                        @if ($errors->has('a'))
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold">{{ $errors->first('a') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h5> Jawaban B.</h5>
                    </div>
                    <div class="col-md-10">
                        <textarea class="summernote" name="b">
                            {{ $soal->pilb }}
                        </textarea>
                        @if ($errors->has('b'))
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold">{{ $errors->first('b') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <h5> Jawaban C.</h5>
                    </div>
                    <div class="col-md-10">
                        <textarea class="summernote" name="c">
                            {{ $soal->pilc }}
                        </textarea>
                        @if ($errors->has('c'))
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold">{{ $errors->first('c') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <h5> Jawaban D.</h5>
                    </div>
                    <div class="col-md-10">
                        <textarea class="summernote" name="d" required>
                            {{ $soal->pild }}
                        </textarea>
                        @if ($errors->has('d'))
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold">{{ $errors->first('d') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Kunci Jawaban</label>
                    <div class="col-md-10">

                        <label class="radio-inline">
                            <input type="radio" name="kunci" class="styled"
                                {{ $soal->kunci == "A" ? 'checked="checked' : "" }} checked="checked" value="A">
                            Jawaban <b>A</b>
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="kunci" class="styled" value="B"
                                {{ $soal->kunci == "B" ? 'checked="checked' : "" }}>
                            Jawaban <b>B</b>
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="kunci" class="styled" value="C"
                                {{ $soal->kunci == "C" ? 'checked="checked' : "" }}>
                            Jawaban <b>C</b>
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="kunci" class="styled" value="D"
                                {{ $soal->kunci == "D" ? 'checked="checked' : "" }}>
                            Jawaban <b>D</b>
                        </label>
                        @if ($errors->has('kunci'))
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold">{{ $errors->first('kunci') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Score</label>
                    <div class="col-lg-10">
                        <input type="number" class="form-control" name="score" min="0" value="{{ $soal->score }}"
                            required>
                        @if ($errors->has('score'))
                        <div class="alert bg-danger-400 alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                    class="sr-only">Close</span></button>
                            <span class="text-semibold">{{ $errors->first('score') }}
                        </div>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-success"> Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection
