<?php
	$lokasi="Sunting Satuan Barang";
	$brg = new barang();
	$id_satuan=$_GET['id_satuan'];
	echo'
	<div class="konten">
	<div class="lokasi"><label>'.$lokasi.'</label></div>
	<form class="form1" action="?mod='.$_GET['mod'].'&h=aksi" method="post" enctype="multipart/form-data"  name="sunting-sup" >
	<div class="alat">
		<input name="br_satuan_perbaharui" type="submit" value="Perbaharui" class="perbaharui" id="kiri">
		<input name="btn_batal" type="reset"  value="Batal" class="batal" id="kanan" onClick="javascript:history.back()">
		<input type="hidden" name="lokasi" value="'.$lokasi.'">
	</div>
	<table  border="0" cellpadding="2" cellspacing="2">
		<tr><td style="width: 100px;"><label>ID Satuan</label></td><td style="width: 10px;">:</td>
			<td style="width: 700px;"><input  maxlength="8" size="15" name="id_satuan" class="text" value="'.$id_satuan.'" readonly=""></td></tr>
		<tr><td ><label>Satuan</label></td><td>:</td>
			<td><input  maxlength="35" size="40" name="satuan" class="text" value="'.$brg->sunting_satuan('satuan',$id_satuan).'"></td></tr>	
	</table>
	</form>
	</div>';
?>
