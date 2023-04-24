<div class="row">
    <div class="col-md-6">
        <div class="card">
            <form class="form-horizontal" method="POST" action="<?= base_url("Dashboard/i_pn") ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="pl_jenis" class="col-sm-4 text-left control-label col-form-label">JENIS</label>
                        <div class="col-sm-8">
                            <select name="pl_jenis" id="pl_jenis" class="form-control">
                                <option hidden>Pilih Jenis Pengeluaran</option>
                                <option value="MAINTENANCE">MAINTENANCE</option>
                                <option hidden>Pilih Jenis Pengeluaran</option>
                                <option value="GAJI">GAJI KARYAWAN</option>
                                <option hidden>Pilih Jenis Pengeluaran</option>
                                <option value="TEMPAT">LAINNYA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pl_tanggal" class="col-sm-4 text-left control-label col-form-label">TANGGAL</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="pl_tanggal" id="pl_tanggal" autofocus>
                            <?= form_error('pl_tanggal', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pl_nama" class="col-sm-4 text-left control-label col-form-label">PENGELUARAN</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pl_nama" id="pl_nama" value="<?= set_value('pl_nama') ?>" placeholder="nama pengeluaran">
                            <?= form_error('pl_nama', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pl_total" class="col-sm-4 text-left control-label col-form-label">BIAYA</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pl_total" id="pl_total" value="<?= set_value('pl_total') ?>" placeholder="biaya pengeluaran">
                            <?= form_error('pl_total', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
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