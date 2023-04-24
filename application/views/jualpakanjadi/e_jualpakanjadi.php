<div class="row">
    <div class="col-md-6">
        <div class="card">
            <form class="form-horizontal" method="POST" action="<?= base_url("Dashboard/update_jualpakanjadi/" . $col['id_pm']) ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="pm_tanggal" class="col-sm-4 text-left control-label col-form-label">TANGGAL</label>
                        <div class="col-sm-8">
                            <input type="date" value="<?= $col['pm_tanggal'] ?>" class="form-control" name="pm_tanggal" id="pm_tanggal" autofocus>
                            <?= form_error('pm_tanggal', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pm_nama" class="col-sm-4 text-left control-label col-form-label">NAMA</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pm_nama" id="pm_nama" value="<?= $col['pm_nama'] ?>" placeholder="nama">
                            <?= form_error('pm_nama', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pm_harga" class="col-sm-4 text-left control-label col-form-label">HARGA</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pm_harga" id="pm_harga" value="<?= $col['pm_harga'] ?>" placeholder="Harga">
                            <?= form_error('pm_harga', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pm_jumlah" class="col-sm-4 text-left control-label col-form-label">JUMLAH</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pm_jumlah" id="pm_jumlah" value="<?= $col['pm_jumlah'] ?>" placeholder="jumlah">
                            <?= form_error('pm_jumlah', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>