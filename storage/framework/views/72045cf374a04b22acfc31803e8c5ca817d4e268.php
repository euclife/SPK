<?php
	if ($soal->checkJawab) {
		$jawab_siswa = $soal->checkJawab->pilihan;
	}else{
		$jawab_siswa = '';
	}
?>
<span class="detail_soal_id" style="display: none;"><?php echo e($soal->id); ?></span>
<div class="soal"><?php echo $soal->pertanyaan; ?></div>
<?php if ($soal->pila) {?>
<div class="jawab <?php echo e($jawab_siswa == 'A' ? 'dijawab' : ''); ?>" soal-id="<?php echo e($soal->id_soal); ?>" data-id="<?php echo e($soal->id); ?>"
    data-jawab="<?php echo e('A/'.$soal->id.'/'.Auth::user()->id); ?>">
    <table width="100%">
        <tr>
            <td width="15px" valign="top"><span>A.</span></td>
            <td valign="top" class="pilihan"><?php echo $soal->pila; ?></td>
        </tr>
    </table>
</div>
<?php } ?>
<?php if ($soal->pilb) {?>
<div class="jawab <?php echo e($jawab_siswa == 'B' ? 'dijawab' : ''); ?>" soal-id="<?php echo e($soal->id_soal); ?>" data-id="<?php echo e($soal->id); ?>"
    data-jawab="<?php echo e('B/'.$soal->id.'/'.Auth::user()->id); ?>">
    <table width="100%">
        <tr>
            <td width="15px" valign="top"><span>B.</span></td>
            <td valign="top" class="pilihan"><?php echo $soal->pilb; ?></td>
        </tr>
    </table>
</div>
<?php } ?>
<?php if ($soal->pilc) {?>
<div class="jawab <?php echo e($jawab_siswa == 'C' ? 'dijawab' : ''); ?>" soal-id="<?php echo e($soal->id_soal); ?>" data-id="<?php echo e($soal->id); ?>"
    data-jawab="<?php echo e('C/'.$soal->id.'/'.Auth::user()->id); ?>">
    <table width="100%">
        <tr>
            <td width="15px" valign="top"><span>C.</span></td>
            <td valign="top" class="pilihan"><?php echo $soal->pilc; ?></td>
        </tr>
    </table>
</div>
<?php } ?>
<?php if ($soal->pild) {?>
<div class="jawab <?php echo e($jawab_siswa == 'D' ? 'dijawab' : ''); ?>" soal-id="<?php echo e($soal->id_soal); ?>" data-id="<?php echo e($soal->id); ?>"
    data-jawab="<?php echo e('D/'.$soal->id.'/'.Auth::user()->id); ?>">
    <table width="100%">
        <tr>
            <td width="15px" valign="top"><span>D.</span></td>
            <td valign="top" class="pilihan"><?php echo $soal->pild; ?></td>
        </tr>
    </table>
</div>
<?php } ?>
<?php if ($soal->pile) {?>
<div class="jawab <?php echo e($jawab_siswa == 'E' ? 'dijawab' : ''); ?>" soal-id="<?php echo e($soal->id_soal); ?>" data-id="<?php echo e($soal->id); ?>"
    data-jawab="<?php echo e('E/'.$soal->id.'/'.Auth::user()->id); ?>">
    <table width="100%">
        <tr>
            <td width="15px" valign="top"><span>E.</span></td>
            <td valign="top" class="pilihan"><?php echo $soal->pile; ?></td>
        </tr>
    </table>
</div>
<?php } ?><?php /**PATH D:\Data\Project\Laravel\SPK\resources\views/user/form/get_soal.blade.php ENDPATH**/ ?>