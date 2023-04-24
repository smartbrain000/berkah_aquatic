<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah Peraturan Keuangan</a>
                    <table id="zero_config" class="table table-bordered table-hover">
                        <thead>
                            <tr class="bg-dark text-white">
                                <th scope="col">#</th>
                                <th scope="col">Peraturan</th>
                                <th scope="col">Dibuat</th>
                                <th scope="col">Diubah</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($cr as $r) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?= $i ?></th>
                                    <td><?= $r['cash_rule'] ?></td>
                                    <td class="text-center"><?= $r['created_at'] ?></td>
                                    <td class="text-center"><?= $r['updated_at'] ?></td>
                                    <td class="text-center">
                                        <a class="badge badge-pill badge-info" href="<?= base_url("Bendahara/e_cr/" . $r['id_cr']) ?>">edit</a>
                                        <a class="badge badge-pill badge-danger" href="<?= base_url("Bendahara/del_cr/" . $r['id_cr']) ?>">delete</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Peraturan Keuangan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url("Bendahara") ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="cash_rule" id="cash_rule" value="<?= set_value('cash_rule') ?>" placeholder="Peraturan Keuangan" autofocus>
                                    </textarea>
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