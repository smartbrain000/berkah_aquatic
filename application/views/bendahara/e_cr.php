                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="<?= base_url("Bendahara/e_cr/" . $cr['id_cr']) ?>">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nm_cr" class="col-sm-3 text-left control-label col-form-label">Peraturan</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="nm_cr" id="nm_cr" autofocus><?= $cr['cash_rule'] ?></textarea>
                                            <?= form_error('nm_cr', '<div class="col-12"><small class="text-danger">', '</small></div>') ?>
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