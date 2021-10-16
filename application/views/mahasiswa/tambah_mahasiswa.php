<div class="card">
        <div class="card-body">
        <fieldset>
                <form action="<?php echo base_url().'mahasiswa/proses_simpan';?>" method="POST">
                <label for="gambar">FOTO</label>
                <input class="form-control" name="gambar" cols="50"type="file" required class="formcontrol input-default" name="gambar">
                <br/>
                <label for="npm">NPM</label>
                <input class="form-control" name="npm" cols="50" type="text">
                <br/>
                <label for="nama">Nama Mahasiswa</label>
                <input class="form-control" name="nama" cols="50" type="text">
                <br/>
                <label for="alamat">Alamat</label>
                <input class="form-control" name="alamat" cols="50" type="text">
                <br/>
                <label for="telepon">Telp</label>
                <input class="form-control" name="telepon" cols="50" type="text">
                <br/>
                <input class="btn btn-primary" type="submit" value="Tambah" />
                </form>
                </fieldset>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->









