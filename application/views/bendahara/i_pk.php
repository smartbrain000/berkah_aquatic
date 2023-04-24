                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="<?= base_url("Bendahara/i_pk") ?>">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="tgl_pk" class="col-sm-4 text-left control-label col-form-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" name="tgl_pk" id="tgl_pk" autofocus>
                                            <?= form_error('tgl_pk', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_pk" class="col-sm-4 text-left control-label col-form-label">Nama Pengeluaran</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nama_pk" id="nama_pk" value="<?= set_value('nama_pk') ?>" placeholder="Nama Pengeluaran">
                                            <?= form_error('nama_pk', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jml_pk" class="col-sm-4 text-left control-label col-form-label">Jumlah Pengeluaran</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="jml_pk" id="jml_pk" value="<?= set_value('jml_pk') ?>" placeholder="Jumlah Pengeluaran">
                                            <?= form_error('jml_pk', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
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