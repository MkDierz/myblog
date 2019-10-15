
	<br>
	<h2 align="center">Data Mahasiswa</h2>
	<table border="1" width="100%">
		<thead>
			<th>No</th>
			<th>Nim</th>
			<th>Nama Mahasiswa</th>
			<th>Prodi Mahasiswa</th>
			<th>Fakultas Mahasiswa</th>
			<th>Aksi</th>
		</thead>
		<tbody>
		<?php $no = 1;
		foreach ($mahasiswa->result() as $m) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $m->mhs_nim; ?></td>
				<td><?php echo $m->mhs_nama; ?></td>
				<td><?php echo $m->mhs_prodi; ?></td>
				<td><?php echo $m->mhs_fakultas; ?></td>
				<td>
					<a href="<?php echo base_url(); ?>home/edit/<?php echo $m->mhs_nim; ?>">Edit</a>
					<a href="<?php echo base_url(); ?>home/hapus/<?php echo $m->mhs_nim; ?>">Hapus</a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>

