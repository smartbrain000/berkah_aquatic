                <div class="row">
                    <div class="col-md-6">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="<?= base_url("Bendahara/bayar/" . $ta['no_tg'] . "/" . $ta['id_mhs']) ?>">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 text-left control-label col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $ta['nama'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nm_tg" class="col-sm-3 text-left control-label col-form-label">Nama Tagihan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nm_tg" id="nm_tg" value="<?= $ta['nama_tagihan'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jml_tg" class="col-sm-3 text-left control-label col-form-label">Jumlah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="jml_tg" id="jml_tg" value="Rp <?= number_format($ta['jml_tagihan']); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exp" class="col-sm-3 text-left control-label col-form-label">Expired</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="exp" id="exp" value="<?= $ta['expired_at'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sisa" class="col-sm-3 text-left control-label col-form-label">Sisa Tagihan</label>
                                        <div class="col-sm-9">
                                            <?php $sisa = $ta['jml_tagihan'] - $ta['dibayar']; ?>
                                            <input type="text" class="form-control" name="sisa" id="sisa" value="Rp <?= number_format($sisa); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nominal" class="col-sm-3 text-left control-label col-form-label">Nominal bayar</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nominal" id="nominal" value="<?= $sisa; ?>" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl" class="col-sm-3 text-left control-label col-form-label">Tanggal bayar</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="tgl" id="tgl" value="<?= date("Y-m-d") ?>">
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