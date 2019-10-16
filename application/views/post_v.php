<?php echo form_open('post/post');?>
<style media="screen">
    blog{
        font-size: 15pt
    }
    td{
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .button submit{
        border: 0;
        background: none;
        box-shadow: none;
        border-radius: 0px;
    }
    input{
        width: 100%;
    }
    table{
        width: 100%;
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
                        <input name="nama" type="text">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>
                        <input name="tanggal" type="date" />
                    </td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td>
                        <input name="judul" type="text" />
                    </td>
                </tr>
                <tr >
                    <td valign="top">Isi</td>
                    <td valign="top">:</td>
                    <td>
                        <textarea name="isi" rows="8" cols="70"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Image File</td>
                    <td>:</td>
                    <td>
                        <input name="img" type="text" />
                    </td>
                </tr>
            </table>
            <div class="button1">
                <button type="submit" name="post" >Posting</button>
            </div>
        </div>
    </div>
</div>

<?php echo form_close(' ');?>
