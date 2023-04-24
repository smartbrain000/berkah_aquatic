<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <?= form_error('nm_tg', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('jml_tg', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('cr_at', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= form_error('exp', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah Tagihan</a>
                    <table id="zero_config" class="table table-bordered table-hover">
                        <thead>
                            <tr class="bg-dark text-white">
                                <th scope="col">#</th>
                                <th scope="col">Nama Tagihan</th>
                                <th scope="col">Jumlah Tagihan</th>
                                <th scope="col">Dibuat</th>
                                <th scope="col">Batas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($tg as $r) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?= $i ?></th>
                                    <td>
                                        <a href="<?= base_url("Bendahara/s_tg/" . $r['no_tg']) ?>">
                                            <?= $r['nama_tagihan'] ?>
                                        </a>
                                    </td>
                                    <td><?= number_format($r['jml_tagihan']) ?></td>
                                    <td class="text-center"><?= $r['created_at'] ?></td>
                                    <td class="text-center"><?= $r['expired_at'] ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-info" href="<?= base_url("Bendahara/e_tg/" . $r['no_tg']) ?>"><i class="mdi mdi-lead-pencil"></i></a>
                                        <a class="btn btn-danger" href="<?= base_url("Bendahara/del_tg/" . $r['no_tg']) ?>"><i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                            <?php $i++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Tagihan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url("Bendahara/tagihan") ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="nm_tg" class="col-sm-4 text-left control-label col-form-label">Nama Tagihan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nm_tg" id="nm_tg" value="<?= set_value('nm_tg') ?>" placeholder="Nama Tagihan" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jml_tg" class="col-sm-4 text-left control-label col-form-label">Jumlah Tagihan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="jml_tg" id="jml_tg" value="<?= set_value('jml_tg') ?>" placeholder="100000">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cr_at" class="col-sm-4 text-left control-label col-form-label">Tanggal Dibuat</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="cr_at" id="cr_at" value="<?= set_value('cr_at') ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exp" class="col-sm-4 text-left control-label col-form-label">Expired</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="exp" id="exp" value="<?= set_value('exp') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>