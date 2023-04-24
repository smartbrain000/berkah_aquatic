<div class="row">
    <div class="col-md-6">
        <div class="card">
            <form class="form-horizontal" method="POST" action="<?= base_url("Dashboard/i_pm") ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="pm_jenis" class="col-sm-4 text-left control-label col-form-label">JENIS</label>
                        <div class="col-sm-8">
                            <select name="pm_jenis" id="pm_jenis" class="form-control">
                                <option hidden>Pilih Jenis Penjualan</option>
                                <option value="PREDATOR">IKAN PREDATOR</option>
                                <option hidden>Pilih Jenis Penjualan</option>
                                <option value="HIAS">IKAN HIAS</option>
                                <option hidden>Pilih Jenis Penjualan</option>
                                <option value="HIDUP">PAKAN HIDUP</option>
                                <option hidden>Pilih Jenis Penjualan</option>
                                <option value="JADI">PAKAN JADI</option>
                                <option hidden>Pilih Jenis Penjualan</option>
                                <option value="RAWATIKAN">PERAWATAN IKAN</option>
                                <option hidden>Pilih Jenis Penjualan</option>
                                <option value="OBATTANAMAN">PERAWATAN TANAMAN</option>
                                <option hidden>Pilih Jenis Penjualan</option>
                                <option value="AKSESORIS">AKSESORIS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pm_tanggal" class="col-sm-4 text-left control-label col-form-label">TANGGAL</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="pm_tanggal" id="pm_tanggal" autofocus>
                            <?= form_error('pm_tanggal', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pm_nama" class="col-sm-4 text-left control-label col-form-label">NAMA</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pm_nama" id="pm_nama" value="<?= set_value('pm_nama') ?>" placeholder="nama item yang dijual">
                            <?= form_error('pm_nama', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pm_harga" class="col-sm-4 text-left control-label col-form-label">HARGA</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pm_harga" id="pm_harga" value="<?= set_value('pm_harga') ?>" placeholder="harga jual">
                            <?= form_error('pm_harga', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pm_jumlah" class="col-sm-4 text-left control-label col-form-label">JUMLAH</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pm_jumlah" id="pm_jumlah" value="<?= set_value('pm_jumlah') ?>" placeholder="jumalah item">
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