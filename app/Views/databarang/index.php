<?= $this->extend('layouts/index'); ?>
<?= $this->section('konten'); ?>
<div class="row">
    <div class="col-12 col-sm-4">
        <div class="card mx-3 mx-md-2">
            <div class="card-header">
                <h3 class="card-title"><i class="fa-solid fa-keyboard"></i> Tambah Barang</h3>
                <div class="card-tools">
                    <!-- Collapse Button -->
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-1 mb-sm-3 row">
                    <label for="kode_barang" class="col-xl-3 col-lg-5 col-form-label">Kode Barang</label>
                    <div class="col-xl-9 col-lg-7">
                        <input type="text" class="form-control" id="kode_barang" value="<?= $kodebarang; ?>" readonly>
                    </div>
                </div>
                <div class="mb-1 mb-sm-3 row">
                    <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_barang">
                    </div>
                </div>
                <div class="mb-1 mb-sm-3 row">
                    <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                    <div class="col-sm-9">
                        <select id="satuan" class="form-control">
                            <?php foreach ($satuan as $s) : ?>
                                <option value="<?= $s['id']; ?>"><?= $s['nama_satuan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jenis_barang" class="col-sm-3 col-form-label">Jenis Barang</label>
                    <div class="col-sm-9">
                        <select id="jenis_barang" class="form-control">
                            <?php foreach ($jenis as $j) : ?>
                                <option value="<?= $j['id']; ?>"><?= $j['nama_jenis']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row justify-content-sm-end justify-content-center">
                    <button class="btn btn-primary mr-3">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-8">
        <div class="card mx-3 mx-md-2">
            <div class="card-header">
                <h3 class="card-title"><i class="fa-solid fa-table"></i> <?= $title; ?></h3>
                <div class="card-tools">
                    <!-- Collapse Button -->
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body overflow-auto">
                <table class="table table-bordered display" id="data-barang">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Stok Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($databarang as $d) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $no++; ?></th>
                                <td><?= $d['kode_barang']; ?></td>
                                <td><?= $d['nama_barang']; ?></td>
                                <td><?= $d['nama_satuan']; ?></td>
                                <td><?= $d['nama_jenis']; ?></td>
                                <td><?= ($d['stok_barang'] == 0) ? 'Kosong' : $d['stok_barang']; ?></td>
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