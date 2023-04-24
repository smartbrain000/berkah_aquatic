<div class="card">
    <div class="card-body">
        <h4 class="text-success"> PEMASUKAN</h4>
        <div class="row">
            <?php
            $pm1 = $this->Mydb->pm_hariini();
            $pm2 = $this->Mydb->pm_bulanini();
            $pm3 = $this->Mydb->pm_tahunini();
            $pm4 = $this->Mydb->pm_selamaini();

            ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h6 class="text-white"> HARI INI</h6>
                        <h3 class="text-white"><?= (isset($pm1['total'])) ? 'Rp ' . number_format($pm1['total']) : '0' ?></h3>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h6 class="text-white"> BULAN INI</h6>
                        <h3 class="text-white"> <?= (isset($pm2['total'])) ? 'Rp ' . number_format($pm2['total']) : '0' ?></h3>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h6 class="text-white"> TAHUN INI</h6>
                        <h3 class="text-white"><?= (isset($pm3['total'])) ? 'Rp ' . number_format($pm3['total']) : '0' ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card card-hover">
                    <div class="box bg-primary text-center">
                        <h6 class="text-white"> SELAMA INI</h6>
                        <h3 class="text-white"><?= (isset($pm4['total'])) ? 'Rp ' . number_format($pm4['total']) : '0' ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="text-danger"> PENGELUARAN</h4>
        <div class="row">
            <?php
            $pl1 = $this->Mydb->pl_hariini();
            $pl2 = $this->Mydb->pl_bulanini();
            $pl3 = $this->Mydb->pl_tahunini();
            $pl4 = $this->Mydb->pl_selamaini();
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h6 class="text-white"> HARI INI</h6>
                        <h3 class="text-white"><?= (isset($pl1['total'])) ? 'Rp ' . number_format($pl1['total']) : '0' ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h6 class="text-white"> BULAN INI</h6>
                        <h3 class="text-white"> <?= (isset($pl2['total'])) ? 'Rp ' . number_format($pl2['total']) : '0' ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h6 class="text-white"> TAHUN INI</h6>
                        <h3 class="text-white"><?= (isset($pl3['total'])) ? 'Rp ' . number_format($pl3['total']) : '0' ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card card-hover">
                    <div class="box bg-primary text-center">
                        <h6 class="text-white"> SELAMA INI</h6>
                        <h3 class="text-white"><?= (isset($pl4['total'])) ? 'Rp ' . number_format($pl4['total']) : '0' ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">GRAFIK KEUANGAN</h4>
                        <div id="graph_line" style="width:100%; height:280px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>