        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-bordered table-hover">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th scope="col">#</th>
                                        <th scope="col">Tanggal Bayar</th>
                                        <?php if ($UA->num_rows() > 0) { ?>
                                            <th scope="col">Nama</th>
                                        <?php } ?>
                                        <th scope="col">Nama Tagihan</th>
                                        <th scope="col">Nominal Bayar</th>
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
                                            <td><?= $r['tgl_bayar'] ?></td>
                                            <?php if ($UA->num_rows() > 0) { ?>
                                                <td><?= $r['nama'] ?></td>
                                            <?php } ?>
                                            <td><?= $r['nama_tagihan'] ?></td>
                                            <td class="text-right">Rp <?= number_format($r['nominal_bayar']) ?></td>
                                            <?php if ($UA->num_rows() > 0) { ?>
                                                <td>
                                                    <a href="<?= base_url("Bendahara/del_pb/" . $r['no_pb']) ?>" class="btn btn-danger">
                                                        Batal
                                                    </a>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    <?php $i++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>