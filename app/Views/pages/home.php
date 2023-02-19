<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="<?= base_url(); ?>"><?= base_url(); ?></a>
            <h1>Hello, world!</h1>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>