<?php $title = "Daftar mahasiswa"; ?>
<section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <a href="<?php echo base_url('Mahasiswa/tambah') ?>" class="btn btn-primary">Tambah Data</a>
            <br>
            <br>
         
        <table id="example1" class="table table-bordered table-striped" >
            <thead class="table-dark">
              <tr>
                <th >FOTO</th>
                <th >NPM </th>
                <th>Nama </th>
                <th>Alamat </th>
                <th>Telepon </th>
                <th>Aksi </th>
              </tr>
            </thead>
            
            <tbody>
              <?php foreach ($daftar_mahasiswa as $mahasiswa) {?>
                <tr>
                  <td><img src="<?php echo base_url()?>assets/adminlte/gallery/<?php echo $mahasiswa->gambar?>" witdh="60px" height="60px"></td>
                  <td> <?php echo $mahasiswa->npm;?> </td>
                  <td> <?php echo $mahasiswa->nama;?></td>
                  <td> <?php echo $mahasiswa->alamat;?></td>
                  <td> <?php echo $mahasiswa->telepon;?></td>
                  <td>
                    <a class="badge badge-success" href="<?php echo base_url().'mahasiswa/edit/'.$mahasiswa->id;?>">Edit</a> |
                    <a class="badge badge-danger" href="<?php echo base_url().'mahasiswa/proses_hapus/'.$mahasiswa->id;?>">Delete</a>
                  </td>
              </tr>
              <?php } ?>
            </tbody>

          </table>


        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
     
    </section>