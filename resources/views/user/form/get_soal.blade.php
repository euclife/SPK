<?php
	if ($soal->checkJawab) {
		$jawab_siswa = $soal->checkJawab->pilihan;
	}else{
		$jawab_siswa = '';
	}
?>
<span class="detail_soal_id" style="display: none;">{{ $soal->id_soal }}</span>
<div class="soal">{!! $soal->pertanyaan !!}</div>
<?php if ($soal->pila) {?>
<div class="jawab {{ $jawab_siswa == 'A' ? 'dijawab' : '' }}" soal-id="{{ $soal->id_soal }}" data-id="{{ $soal->id }}"
    data-jawab="{{ 'A/'.$soal->id_soal.'/'.Auth::user()->id }}">
    <table width="100%">
        <tr>
            <td width="15px" valign="top"><span>A.</span></td>
            <td valign="top" class="pilihan">{!! $soal->pila !!}</td>
        </tr>
    </table>
</div>
<?php } ?>
<?php if ($soal->pilb) {?>
<div class="jawab {{ $jawab_siswa == 'B' ? 'dijawab' : '' }}" soal-id="{{ $soal->id_soal }}" data-id="{{ $soal->id_soal }}"
    data-jawab="{{ 'B/'.$soal->id_soal.'/'.Auth::user()->id }}">
    <table width="100%">
        <tr>
            <td width="15px" valign="top"><span>B.</span></td>
            <td valign="top" class="pilihan">{!! $soal->pilb !!}</td>
        </tr>
    </table>
</div>
<?php } ?>
<?php if ($soal->pilc) {?>
<div class="jawab {{ $jawab_siswa == 'C' ? 'dijawab' : '' }}" soal-id="{{ $soal->id_soal }}" data-id="{{ $soal->id_soal }}"
    data-jawab="{{ 'C/'.$soal->id_soal.'/'.Auth::user()->id }}">
    <table width="100%">
        <tr>
            <td width="15px" valign="top"><span>C.</span></td>
            <td valign="top" class="pilihan">{!! $soal->pilc !!}</td>
        </tr>
    </table>
</div>
<?php } ?>
<?php if ($soal->pild) {?>
<div class="jawab {{ $jawab_siswa == 'D' ? 'dijawab' : '' }}" soal-id="{{ $soal->id_soal }}" data-id="{{ $soal->id_soal }}"
    data-jawab="{{ 'D/'.$soal->id_soal.'/'.Auth::user()->id }}">
    <table width="100%">
        <tr>
            <td width="15px" valign="top"><span>D.</span></td>
            <td valign="top" class="pilihan">{!! $soal->pild !!}</td>
        </tr>
    </table>
</div>
<?php } ?>