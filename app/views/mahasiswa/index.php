<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal" aria-label="Close">
            Tambah Data Mahasiswa
        </button>


        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="cari mahasiswa...." name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-primary" type="submit" id="tombolcari">Cari</button>
            </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8" >
            <!-- modal -->
            
            
            
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                <li class="list-group-item ">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?')">hapus</a> 
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
                    
                </li>
                <?php endforeach; ?>
            </ul>
            </div>
        </div>
    </div>
</div>

<!-- modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog"
aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">        
            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="form-group">
                <label for="nrp" class="form-label">Nrp</label>
                <input type="text" class="form-control" id="nrp" name="nrp">
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                    <option value="RPL">RPL</option>
                    <option value="TKJ">TKJ</option>
                    <option value="BB">BB</option>
                    <option value="OTO">OTO</option>
                </select>
            </div>
  </div>
                
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
      </div>
    </div>
    </div>
  </div>
</div>
