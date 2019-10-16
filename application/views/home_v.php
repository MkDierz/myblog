<?php foreach ($artikel->result() as $a) {?>

	<!-- bagian konten Blog -->
	<div class="blog" >
		<div class="conteudo">
			<div class="post-info" >
				Di Posting Oleh <b><?php echo $a->artikel_nama ;?></b>
			</div>
			<?php
            if ($a->artikel_img == '') {
                echo '<img src="asset/image/default.jpg">';
            } else {
                echo '<img src="','asset/image/', $a->artikel_img ,'">';
            }
            ?>
			<br>
			<?php echo $a->artikel_tanggal ;?>
			<h1> <?php echo $a->artikel_judul ;?> </h1>
			<hr>
			<p>
				<?php echo $a->artikel_isi ;?>
			</p>
			<br>
			<div class="action">
				<ul>
					<li>
						<a href="<?php echo base_url();?>home/edit/<?php echo $a->artikel_id;?>"><b>Edit</b></a>
					</li>
				</ul>
			</div>
		</div>

	</div>
	<!-- akhir bagian konten Blog -->

<?php } ?>
