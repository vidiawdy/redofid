<!DOCTYPE html>
    <html>
    <head>
        <title>Data Barang</title>
    </head>
    <body>
    	<form method="POST" action="do_insert" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode_barang"/>
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang"/>
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"/>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"/>
                </td>
            </tr>
            <div class="form-group">
                                    <label for="kategori">Kategori *</label><br>
                                    <select class="col-sm-12" name="kategori"> 
                                        <option value="Hijab">Hijab </option>
                                        <option value="Scarf">Scarf </option>
                                        
                                    </select> 
                                </div>
            <tr>
                <td>Image</td>
                <td><?php echo form_upload('pic'); ?></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        <table>
        </form>
    </body>
    </html>