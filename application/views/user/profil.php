<div class="row">
    <div class="col-lg-4 col-md-8 col-sm-12">
        <div class="card mb-3">
            <div class="card-header bg-dark text-white text-center">
                <img src="<?= base_url() ?>assets/images/users/<?= $user['picture'] ?>" width="150px" height="auto" class="mb-2" />
                <h4 class="card-title"><?= $user['nama_jabatan'] ?></h4>
            </div>
            <div class="card-body">

                <h5 class="card-title"><?= session_gan('username'); ?></h5>
                <p class="card-text">
                    <i class="mdi mdi-account-location"></i> <?= $user['foto'] ?></br>
                    <i class="mdi mdi-gmail"></i> <?= $user['nama'] ?></br>
                    <i class="mdi mdi-whatsapp"></i> <?= $user['alamat'] ?>
                    <i class="mdi mdi-whatsapp"></i> <?= $user['apemilik'] ?>
                </p>
            </div>
        </div>
    </div>
</div>