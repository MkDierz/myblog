<?php $m = $mahasiswa->row(); ?>

	<div style="width: 300px;margin: auto;">

		<h4 align="center">Form Pendaftaran</h4>
		<h4><?php echo $this->session->flashdata('mhs_input'); ?></h4>

		<?php echo form_open('home/edit_proses/'.$m->mhs_nim.''); ?>
		<table>	
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="number" name="nim" value="<?php echo $m->mhs_nim; ?>"></td>
			</tr>
			<tr>
				<td>Nama Mahasisawa</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $m->mhs_nama; ?>"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td>:</td>
				<td><input type="text" name="prodi" value="<?php echo $m->mhs_prodi; ?>"></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><input type="text" name="fakultas" value="<?php echo $m->mhs_fakultas; ?>"></td>
			</tr>
		</table>
		<p align="center">
			<input type="submit" value="Simpan">
		</p>

		<?php echo form_close(); ?>
	</div>
