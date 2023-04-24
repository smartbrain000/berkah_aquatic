            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                $jml_a = $this->mydb->jmlAnggota();
                                $jml_ta = $this->mydb->jml_ta($no);
                                if (($jml_a['jmlAnggota']) != ($jml_ta['jml_ta'])) {
                                ?>
                                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#Modal2">
                                        Buat Tagihan Anggota
                                    </a>
                                <?php
                                }
                                if ($ta != null) { ?>
                                    <table id="zero_config" class="table table-bordered table-hover">
                                        <thead>
                                            <tr class="bg-dark text-white">
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Anggota</th>
                                                <th scope="col">Nominal</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($ta as $r) : ?>
                                                <tr>
                                                    <th class="text-center" scope="row"><?= $i ?></th>
                                                    <td><?= $r['nama'] ?></td>
                                                    <td><?= number_format($r['jml_tagihan']) ?></td>
                                                    <td>
                                                        <?php
                                                        $j = number_format($r['jml_tagihan']);
                                                        $n = number_format($r['dibayar']);
                                                        if ($n == '0') {
                                                            echo '<a href="' . base_url('Bendahara/bayar/' . $r['no_tg'] . '/' . $r['id_mhs']) . '" 
                                                            class="btn btn-warning">Belum Bayar</a>';
                                                        } elseif ($n == $j) {
                                                            echo 'Lunas';
                                                        } else {
                                                            echo '<a href="' . base_url('Bendahara/bayar/' . $r['no_tg'] . '/' . $r['id_mhs']) . '">' . $n . '</a>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-danger" href="<?= base_url("Bendahara/del_tg_a/" . $r['no_tg'] . "/" . $r['no_ta']) ?>"><i class="mdi mdi-delete"></i></a>
                                                        <?php
                                                        if ($n != $j) {
                                                        ?>
                                                            <a class="btn btn-success" href="#"><i class="mdi mdi-email"></i></a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php $i++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="<?= base_url("Bendahara/p_tg") ?>" method="post">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?= $tg['nama_tagihan'] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body table-responsive">
                                        <p>Nominal Tagihan : Rp <?= number_format($tg['jml_tagihan']) ?></p>
                                        <table class="table table-bordered">
                                            <tbody class="customtable">
                                                <tr>
                                                    <th>
                                                        <label class="customcheckbox m-b-20">
                                                            <input type="checkbox" id="mainCheckbox" />
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <td scope="col"><b>NPM</b></td>
                                                    <td scope="col"><b>Nama</b></td>
                                                </tr>
                                                <?php
                                                foreach ($anggota as $a) :
                                                    $id = $a['id_mhs'];
                                                    $no = $this->uri->segment(3);
                                                    $cek_ta = $this->mydb->cek_ta($no, $id);
                                                    if (!$cek_ta) {
                                                ?>
                                                        <tr>
                                                            <th>
                                                                <label class="customcheckbox m-b-20">
                                                                    <input type="checkbox" class="listCheckbox" name="id_mhs[]" value="<?= $a['id_mhs'] ?>" />
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </th>
                                                            <td><?= $a['npm'] ?></td>
                                                            <td><?= $a['nama'] ?></td>
                                                        </tr>
                                                <?php }
                                                endforeach; ?>
                                            </tbody>
                                        </table>
                                        <input type="text" value="<?= $tg['no_tg'] ?>" name="no_tg" class="invisible" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>