<div class="card">
        <div class="card-body">
            <fieldset>
            <form class="form-group" action="<?php echo base_url().'mahasiswa/proses_update/';?>" method="POST">
            <input type="file" required class="formcontrol input-default" name="gambar">
            <label for="gambar">FOTO :</label>
            <small class="formcontrol-feedback"> Silahkan upload kembali gambarnya </small>
            <input class="form-control" name="gambar" cols="50" type="text" value=" <?php echo $mahasiswa->gambar ?> " >
            <br/>
            <form class="form-group" action="<?php echo base_url().'mahasiswa/proses_update/';?>" method="POST">
            <input name="id" type="hidden" value=" <?php echo $mahasiswa->id ?> " >
            <label for="npm">NPM</label>
            <input class="form-control" name="npm" cols="50" type="text" value=" <?php echo $mahasiswa->npm ?> " >
            <br/>
            <label for="nama">Nama Mahasiswa</label>
            <input class="form-control" name="nama" cols="50" type="text" value=" <?php echo $mahasiswa->nama ?> ">
            <br/>
            <label for="alamat">Alamat</label>
            <input class="form-control" name="alamat" cols="50" type="text" value=" <?php echo $mahasiswa->alamat ?> ">
            <br/>
            <label for="telepon">Telp</label>
            <input class="form-control" name="telepon" cols="50" type="text" value=" <?php echo $mahasiswa->telepon ?> ">
            <br/>
            <br/>
            <input class="btn btn-primary" type="submit" value="Simpan" />
            </form>
            </fieldset>
        </div>
</div>