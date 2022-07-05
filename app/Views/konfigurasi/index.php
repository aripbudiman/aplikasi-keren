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
                    <label for="nama_satuan" class="form-label">Nama Satuan</label>
                    <input type="text" class="form-control" id="nama_satuan">
                </div>
                <button type="submit" id="tambah-satuan" class="btn btn-primary">Tambah</button>
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
                    <tbody id="table-satuan">
                        <?php $no = 1;
                        foreach ($satuan as $s) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $no++; ?></th>
                                <td><?= $s['nama_satuan']; ?></td>
                                <td><button class="btn btn-sm btn-danger delete-satuan" data-id="<?= $s['id']; ?>">Delete</button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<!-- /.card -->
<?= $this->endSection(); ?>