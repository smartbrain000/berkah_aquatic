<div class="row">
    <div class="col-md-6">
        <div class="card">
            <form class="form-horizontal" method="POST" action="<?= base_url("Dashboard/update_beliaksesoris/" . $col['id_pl']) ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="pl_tanggal" class="col-sm-4 text-left control-label col-form-label">Tanggal</label>
                        <div class="col-sm-8">
                            <input type="date" value="<?= $col['pl_tanggal'] ?>" class="form-control" name="pl_tanggal" id="pl_tanggal" autofocus>
                            <?= form_error('pl_tanggal', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pl_nama" class="col-sm-4 text-left control-label col-form-label">Nama Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pl_nama" id="pl_nama" value="<?= $col['pl_nama'] ?>" placeholder="">
                            <?= form_error('pl_nama', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pl_harga" class="col-sm-4 text-left control-label col-form-label">Harga Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pl_harga" id="pl_harga" value="<?= $col['pl_harga'] ?>" placeholder="">
                            <?= form_error('pl_harga', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pl_jumlah" class="col-sm-4 text-left control-label col-form-label">Jumlah Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pl_jumlah" id="pl_jumlah" value="<?= $col['pl_jumlah'] ?>" placeholder="">
                            <?= form_error('pl_jumlah', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
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