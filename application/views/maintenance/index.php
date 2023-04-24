<div class="card">
    <div class="card-body">
        <table id="zero_config" class="table table-bordered table-hover">
            <thead>

                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">PENGELUARAN</th>
                    <th scope="col">BIAYA</th>
                    <th scope="col">Action</th>
                </tr>

            </thead>
            <tbody id="datatable-responsive" class="table table-striped table-borderd dt-responsive nowrap">
                <?php
                $no = 1;
                foreach ($tampil as $t) {  ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $t['pl_tanggal'] ?></td>
                        <td><?= $t['pl_nama'] ?></td>
                        <td class='text-right'><?= 'Rp ' . number_format($t['pl_total']) ?></td>
                        <td class="text-center">
                            <a class="btn btn-info" href="<?= base_url("Dashboard/update_maintenance/" . $t['id_pl']) ?>"><i class="mdi mdi-lead-pencil"></i></a>
                            <a class="btn btn-danger" href="<?= base_url("Dashboard/del_maintenance/" . $t['id_pl']) ?>"><i class="mdi mdi-delete" onclick="return confirm('Anda Yakin ?')"></i></a>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>