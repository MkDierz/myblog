
	
	<div style="width: 300px;margin: auto;">

		<h4 align="center">Form Pendaftaran</h4>
		<h4><?php echo $this->session->flashdata('mhs_input'); ?></h4>
		

		<?php echo form_open('home/index'); ?>
		<table>	
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td>
					<input type="number" name="nim"><br>
					<?php echo form_error('nim','<span style="color:red;">','</span>'); ?>
				</td>
			</tr>
			<tr>
				<td>Nama Mahasisawa</td>
				<td>:</td>
				<td><input type="text" name="nama"><br>
					<?php echo form_error('nama','<span style="color:red;">','</span>'); ?>
				</td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td>:</td>
				<td><input type="text" name="prodi"><br>
					<?php echo form_error('prodi','<span style="color:red;">','</span>'); ?>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><input type="text" name="fakultas"><br>
					<?php echo form_error('fakultas','<span style="color:red;">','</span>'); ?>
				</td>
			</tr>
		</table>
		<p align="center">
			<input type="submit" value="Simpan">
		</p>

		<?php echo form_close(); ?>
	</div>
