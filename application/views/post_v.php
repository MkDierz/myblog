<?php echo form_open('post/post');?>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input name="nama" type="text"></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><input name="judul" type="text" /></td>
        </tr>
        <tr>
            <td>Isi</td>
            <td>:</td>
            <td><input name="isi" type="text" /></td>
        </tr>
        <tr>
            <td>Tangal</td>
            <td>:</td>
            <td><input name="tanggal" type="date" /></td>
        </tr>
    </table>
    <button type="submit" name="post">Posting</button>

<?php echo form_close(' ');?>
