        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-body">
                        <?php if ($UA->num_rows() > 0) { ?>
                            <a href="<?= base_url("Bendahara/i_pk") ?>" class="btn btn-primary m-b-15">Tambah Pengeluaran</a>
                        <?php }
                        if ($pb != null) { ?>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="bg-dark text-white">
                                            <th scope="col">#</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Nama Pengeluaran</th>
                                            <th scope="col">Jumlah Pengeluaran</th>
                                            <?php if ($UA->num_rows() > 0) { ?>
                                                <th scope="col">Aksi</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($pb as $r) : ?>
                                            <tr>
                                                <th class="text-center" scope="row"><?= $i ?></th>
                                                <td><?= $r['tgl_pk'] ?></td>
                                                <td><?= $r['nama_pengeluaran'] ?></td>
                                                <td class="text-right">Rp <?= number_format($r['jml_pk']) ?></td>
                                                <?php if ($UA->num_rows() > 0) { ?>
                                                    <td class="text-center">
                                                        <a href="<?= base_url("Bendahara/del_pk/" . $r['no_pk']) ?>" class="btn btn-danger">
                                                            <i class="mdi mdi-delete"></i>
                                                        </a>
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                        <?php $i++;
                                        endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>