<?php $a = $artikel->row(); ?>
<?php echo form_open('home/edit_act/'.$a->artikel_id.''); ?>
<style media="screen">
blog{
	font-size: 15pt
}
td{
	padding-top: 10px;
	padding-bottom: 10px;
}
action{
	padding: 25px;
}
input{
	width: 100%;
}
table{
	width: 100%;
}
.action ul li{
	margin: 5px;
}
.action ul li input{
	border: 0;
	background: none;
	box-shadow: none;
	border-radius: 0px;
	float: right;
	padding: 5px;
	display: block;
	width: auto;
	height: auto;
	color: white;
	text-align: center;
	text-decoration: none;
	background-color: grey;
}
.submit{
}
</style>
<div class="blog" >
	<div class="conteudo">
		<div class="table">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td>
						<input name="nama" type="text" value="<?php echo $a->artikel_nama; ?>">
					</td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td>:</td>
					<td>
						<input name="tanggal" type="date" value="<?php echo $a->artikel_tanggal; ?>" />
					</td>
				</tr>
				<tr>
					<td>Judul</td>
					<td>:</td>
					<td>
						<input name="judul" type="text" value="<?php echo $a->artikel_judul; ?>" />
					</td>
				</tr>
				<tr >
					<td valign="top">Isi</td>
					<td valign="top">:</td>
					<td>
						<textarea name="isi" rows="8" cols="70"><?php echo $a->artikel_isi; ?></textarea>
					</td>
				</tr>
				<tr>
					<td>Image File</td>
					<td>:</td>
					<td>
						<input name="img" type="text" value="<?php echo $a->artikel_img; ?>"/>
					</td>
				</tr>
			</table>
			<div class="action">
				<ul>
					<li>
						<a>
							<input type="submit" name="submit" value="submit">
						</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>home/delete/<?php echo $a->artikel_id;?>">
							<input type="button" class="button_active" name="submit" value="Delete">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php echo form_close(); ?>
