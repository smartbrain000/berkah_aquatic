                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="<?= base_url("Bendahara/e_tg/" . $tg['no_tg']) ?>">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nm_tg" class="col-sm-3 text-left control-label col-form-label">Nama Tagihan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nm_tg" id="nm_tg" value="<?= $tg['nama_tagihan'] ?>" placeholder="Nama Tagihan" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jml_tg" class="col-sm-3 text-left control-label col-form-label">Jumlah Tagihan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="jml_tg" id="jml_tg" value="<?= $tg['jml_tagihan'] ?>" placeholder="Jumlah Tagihan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cr_at" class="col-sm-3 text-left control-label col-form-label">Tanggal Dibuat</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="cr_at" id="cr_at" value="<?= $tg['created_at'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exp" class="col-sm-3 text-left control-label col-form-label">Expired</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="exp" id="exp" value="<?= $tg['expired_at'] ?>">
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