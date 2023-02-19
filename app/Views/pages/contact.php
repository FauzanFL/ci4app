<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="continer">
    <div class="row">
        <div class="col">
            <h2><?= $tittle; ?></h2>
            <?php foreach ($Alamat as $a) : ?>
                <div>
                    <ul>
                        <li><?= $a; ?></li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?= $this->endSection(); ?>