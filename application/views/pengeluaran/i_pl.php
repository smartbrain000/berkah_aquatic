<div class="row">
    <div class="col-md-6">
        <div class="card">
            <form class="form-horizontal" method="POST" action="<?= base_url("Dashboard/i_pl") ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="pl_jenis" class="col-sm-4 text-left control-label col-form-label">JENIS</label>
                        <div class="col-sm-8">
                            <select name="pl_jenis" id="pl_jenis" class="form-control">
                                <option hidden>Pilih Jenis Pembelian</option>
                                <option value="PREDATOR">IKAN PREDATOR</option>
                                <option hidden>Pilih Jenis Pembelian</option>
                                <option value="HIAS">IKAN HIAS</option>
                                <option hidden>Pilih Jenis Pembelian</option>
                                <option value="HIDUP">PAKAN HIDUP</option>
                                <option hidden>Pilih Jenis Pembelian</option>
                                <option value="JADI">PAKAN JADI</option>
                                <option hidden>Pilih Jenis Pembelian</option>
                                <option value="RAWATIKAN">OBAT IKAN</option>
                                <option hidden>Pilih Jenis Pembelian</option>
                                <option value="OBATTANAMAN">OBAT TANAMAN</option>
                                <option hidden>Pilih Jenis Pembelian</option>
                                <option value="AKSESORIS">AKSESORIS</option>
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
                        <label for="pl_nama" class="col-sm-4 text-left control-label col-form-label">NAMA</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pl_nama" id="pl_nama" value="<?= set_value('pl_nama') ?>" placeholder="nama item yang dibeli">
                            <?= form_error('pl_nama', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pl_harga" class="col-sm-4 text-left control-label col-form-label">HARGA</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pl_harga" id="pl_harga" value="<?= set_value('pl_harga') ?>" placeholder="harga beli">
                            <?= form_error('pl_harga', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pl_jumlah" class="col-sm-4 text-left control-label col-form-label">JUMLAH</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pl_jumlah" id="pl_jumlah" value="<?= set_value('pl_jumlah') ?>" placeholder="Jumlah item">
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