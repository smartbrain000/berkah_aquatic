<script>
    window.print();
</script>

<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HMIF Management">
    <meta name="author" content="Radheya">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/uang">
    <title>
        <?= $judul ?>
    </title>

    <link href="<?= base_url() ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?= base_url() ?>dist/css/style.min.css" rel="stylesheet">
    <style>
        @media print {

            .no-print,
            .card-header {
                display: none !important;
            }

            .cnt {
                padding-top: 0px !important;
            }

            .cnt {
                margin-left: 0px !important;
            }

            @page {
                size: landscape;
            }
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="card-body">
            <h3 class="text-center">DETAIL LABA - <?= $this->uri->segment("3") ?></h3>
            <h5>DATA PENGELUARAN </h5>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">HARGA</th>
                        <th scope="col">JUMALAH</th>
                        <th scope="col">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $jumlah_pl = 0;
                    foreach ($pengeluaran as $pl) {  ?>
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
                        $no++;
                    } ?>
                    <tr>
                        <td colspan="5" class="text-center">JUMLAH</td>
                        <td class='text-right'><?= 'Rp ' . number_format($jumlah_pl) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h5> DATA PEMASUKAN</h5>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">HARGA</th>
                        <th scope="col">JUMALAH</th>
                        <th scope="col">TOTAL</th>
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
                        <td colspan="5" class="text-center">JUMLAH</td>
                        <td class='text-right'><?= 'Rp ' . number_format($jumlah_pm) ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>