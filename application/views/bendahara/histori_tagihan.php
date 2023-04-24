        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-bordered table-hover">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Tagihan</th>
                                        <th scope="col">Jumlah Tagihan</th>
                                        <th scope="col">Status Bayar</th>
                                        <th scope="col">Batas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($tg as $r) : ?>
                                        <tr>
                                            <th class="text-center" scope="row"><?= $i ?></th>
                                            <td><?= $r['nama_tagihan'] ?></td>
                                            <td class="text-right">Rp <?= number_format($r['jml_tagihan']) ?></td>
                                            <td class="text-center">
                                                <?php
                                                $t = number_format($r['jml_tagihan']);
                                                $u = number_format($r['dibayar']);
                                                if ($u == 0) {
                                                    echo "<b>Belum Bayar</b>";
                                                } elseif ($u == $t) {
                                                    echo "<b>Lunas</b>";
                                                } else {
                                                    echo $u;
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center"><?= $r['expired_at'] ?></td>
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