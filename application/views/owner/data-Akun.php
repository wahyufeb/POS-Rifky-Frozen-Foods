<div class="container">
    <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron" style="padding:15px;">
                    <h3 class="display-6">Data Akun</h3><br>
                      <a class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#exampleModal" id="input-barang" style="color:white;">
                      Tambah Akun
                      </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover table-bordered " bgcolor="white">
                    <thead class="thead-dark" style="text-align:center;">
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Tempat</th>
                            <th>Jabatan</th>
                            <th width="200px">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;?>
                        <?php foreach($akun as $row): ?>
                        <?php $i++; ?>
                            <tr>
                                <td align="center"><?=$i;?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['nama'];?></td>
                                <td><?= $row['tempat'];?></td>
                                <td align="center">
                                  <?php if($row['jabatan'] == "cashier"){?>
                                    <button class="btn btn-success">Cashier</button>
                                  <?php }elseif($row['jabatan'] == "supplier"){ ?>
                                    <button class="btn btn-warning">Supplier</button>
                                  <?php }?>

                                </td>
                                <td align="center">
                                    <a href="<?=base_url()?>Owner/hapusAkun/<?=$row['id_user']?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- Modal Tambah Akun -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?= base_url() ?>Owner/addAkun" method="post">
        <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="tempat">Tempat</label>
                        <input type="text" class="form-control" id="tempat" placeholder="Enter tempat" name="tempat" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="street">Jabatan</label>
                    <select class="form-control" id="jabatan" name="jabatan" required>
                        <option value="" selected disabled>- pilih jabatan -</option>  
                        <option value="cashier">cashier</option>
                        <option value="supplier">supplier</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
    </div>
    </div>
</div>
</div>
</body>
<script src="<?=base_url()?>assets/jquery/jquery.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</html>