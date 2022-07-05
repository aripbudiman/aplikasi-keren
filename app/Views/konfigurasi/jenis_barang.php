<?= $this->extend('layouts/index'); ?>
<?= $this->section('konten'); ?>
<div class="row">
    <div class="col col-lg-12 col-xl-6">
        <div class="card mx-3">
            <div class="card-header">
                <h3 class="card-title"><i class="fa-solid fa-keyboard"></i> Tambah</h3>
                <div class="card-tools">
                    <!-- Collapse Button -->
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <!-- <form> -->
                <div class="mb-3">
                    <label for="nama_jenis" class="form-label">Nama Jenis</label>
                    <input type="text" class="form-control" id="nama_jenis">
                </div>
                <button type="submit" id="tambah-jenis" class="btn btn-primary">Tambah</button>
                <!-- </form> -->
            </div>
        </div>
    </div>
    <div class="col col-lg-12 col-xl-6">
        <div class="card mx-3">
            <div class="card-header">
                <h3 class="card-title"><i class="fa-solid fa-table"></i> <?= $title; ?></h3>
                <div class="card-tools">
                    <!-- Collapse Button -->
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($jenis as $j) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $no++; ?></th>
                                <td><?= $j['nama_jenis']; ?></td>
                                <td><button class="btn btn-sm btn-danger delete-jenis" data-id="<?= $j['id']; ?>">Delete</button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>