<?= $this->extend('layouts/index'); ?>
<?= $this->section('konten'); ?>
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
        The body of the card
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<?= $this->endSection(); ?>