<div class="card">
    <div class="card-header">
        <a href="<?= base_url('Dashboard/cetak_laba/' . $this->uri->segment('3')) ?>" class="btn btn-primary">
            <i class="mdi mdi-lead-file"></i>CETAK PDF</a>
    </div>
    <div class="card-body">
        <h5>PENDAPATAN</h5>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">PENJUALAN</th>
                    <th scope="col">HARGA JUAL</th>
                    <th scope="col">TERJUAL</th>
                    <th scope="col">TOTAL HARGA </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $jumlah_pm = 0;
                foreach ($pemasukan as $pm) {  ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $pm['pm_tanggal'] ?></td>
                        <td><?= $pm['pm_nama'] ?></td>
                        <td class='text-right'><?= 'Rp ' . number_format($pm['pm_harga']) ?></td>
                        <td><?= $pm['pm_jumlah'] ?></td>
                        <td class='text-right'><?= 'Rp ' . number_format($pm['pm_total']) ?></td>
                    </tr>
                <?php
                    $jumlah_pm += $pm['pm_total'];
                    $no++;
                } ?>
                <tr>
                    <td colspan="5" class="text-center">Jumlah Pendapatan</td>
                    <td class='text-right'><?= 'Rp ' . number_format($jumlah_pm) ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <h5>PENGELUARAN</h5>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">PEMBELIAN</th>
                    <th scope="col">HARGA BELI</th>
                    <th scope="col">JUMLAH BELI</th>
                    <th scope="col">TOTAL HARGA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $jumlah_pl = 0;
                foreach ($pengeluaran as $pl) {
                    if (
                        $pl['pl_jenis'] == 'PREDATOR'
                        || $pl['pl_jenis'] == 'HIAS'
                        || $pl['pl_jenis'] == 'HIDUP'
                        || $pl['pl_jenis'] == 'JADI'
                        || $pl['pl_jenis'] == 'AKSESORIS'
                        || $pl['pl_jenis'] == 'RAWATIKAN'
                        || $pl['pl_jenis'] == 'OBATTANAMAN'
                    ) {
                ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $pl['pl_tanggal'] ?></td>
                            <td><?= $pl['pl_nama'] ?></td>
                            <td class='text-right'><?= 'Rp ' . number_format($pl['pl_harga']) ?></td>
                            <td><?= $pl['pl_jumlah'] ?></td>
                            <td class='text-right'><?= 'Rp ' . number_format($pl['pl_total']) ?></td>
                        </tr>
                <?php
                        $jumlah_pl += $pl['pl_total'];
                    }
                    $no++;
                } ?>
                <tr>
                    <td colspan="5" class="text-center">Jumlah Pembelian</td>
                    <td class='text-right'><?= 'Rp ' . number_format($jumlah_pl) ?>
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">TANGGAL</th>
                    <th colspan="3" class='text-center' scope="col">BEBAN ADMINISTRASI</th>
                    <th colspan="5" scope="col">BIAYA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no3 = 1;
                $jumlah_b = 0;
                foreach ($pengeluaran as $pl) {
                    if (
                        $pl['pl_jenis'] == 'MAINTENANCE'
                        || $pl['pl_jenis'] == 'GAJI'
                        || $pl['pl_jenis'] == 'TEMPAT'
                    ) {
                ?>
                        <tr>
                            <th scope="row"><?= $no3 ?></th>
                            <td><?= $pl['pl_tanggal'] ?></td>
                            <td colspan="3"><?= $pl['pl_nama'] ?></td>
                            <td colspan="5" class='text-right'><?= 'Rp ' . number_format($pl['pl_total']) ?></td>
                        </tr>
                <?php

                        $jumlah_b += $pl['pl_total'];
						
                    $no3++;
                    }
                } ?>
                <tr>
                    <td colspan="5" class="text-center">Jumlah Beban Administrasi</td>
                    <td class='text-right'><?= 'Rp ' . number_format($jumlah_b) ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <h5>LABA BERSIH</h5>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <?php
					//TOTAL LABA BERSIH = JUMLAH PEMASUKAN - (JUMLAH PENGELUARAN + JUMLAH BEBAN ADMINISTRASI)
                    $total = $jumlah_pm - ($jumlah_pl + $jumlah_b);
                    ?>
                    <th class='text-right' scope="col"><?= 'Rp ' . number_format($total) ?></th>
                </tr>
            </thead>
        </table>
    </div>
</div>