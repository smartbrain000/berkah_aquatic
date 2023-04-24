<div class="card">
    <div class="card-body">
        <table id="zero_config" class="table table-bordered table-hover">
            <thead>

                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">PENDAPATAN</th>
                    <th scope="col">PENGELUARAN</th>
                    <th scope="col">LABA</th>
                </tr>

            </thead>
            <tbody id="datatable-responsive" class="table table-striped table-borderd dt-responsive nowrap">
                <?php
                $no = 1;
                foreach ($tampil as $pm) {
                ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td>
                            <a href="<?= base_url('dashboard/detail_laba/' . $pm['tgl']) ?>"><?= $pm['tgl'] ?></a>
                        </td>

                        <td class="text-right">
                            <?=
                                'Rp ' . number_format($pm['total']); //total pemasukan 

                            ?>
                        </td>
                        <td class="text-right">
                            <?php

                            $pk = $this->Mydb->bar_pl($pm['tgl']);
                            echo  'Rp ' . number_format($pk['total']); //total pengeluaran

                            ?>
                        </td>
                        <td class="text-right">
                            <?php $laba = $pm['total'] - $pk['total'];
                            echo 'Rp ' . number_format($laba);
                            ?>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>