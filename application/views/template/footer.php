</div>

</div>
</div>

<footer class="footer text-center no-print">
    Copyright &copy; TOKO BERKAH AQUATIC <br> v.2.0
</footer>
</div>
</div>

<script src="<?= base_url() ?>matrix/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>matrix/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>matrix/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url() ?>matrix/extra-libs/sparkline/sparkline.js"></script>
<script src="<?= base_url() ?>matrix/dist/js/waves.js"></script>
<script src="<?= base_url() ?>matrix/dist/js/sidebarmenu.js"></script>
<script src="<?= base_url() ?>matrix/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<?php if (($this->uri->segment('2') == null) || ($this->uri->segment('2') == 'index')) { ?>

    <script src="<?= base_url() ?>matrix/extra-libs/raphael/raphael.min.js"></script>
    <script src="<?= base_url() ?>matrix/extra-libs/morris.js/morris.min.js"></script>
    <script>
        function init_morris_charts() {
            if (typeof(Morris) === 'undefined') {
                return;
            }
            console.log('init_morris_charts');
            if ($('#graph_line').length) {
                Morris.Line({
                    element: 'graph_line',
                    xkey: 'per',
                    ykeys: ['pm', 'pl'],
                    labels: ['Pemasukan', 'Pengeluaran'],
                    hideHover: 'auto',
                    lineColors: ['green', 'red', '#ACADAC', '#3498DB'],
                    data: [
                        <?php $n1 = 0;
                        foreach ($pm as $p1) {
                            if ($n1 != '0') {
                                echo ",";
                            }
                            $pl = $this->Mydb->bar_pl($p1['tgl']);
                            if ($pl['total'] != null) {
                                $tampil = $pl['total'];
                            } else {
                                $tampil = "0";
                            }

                        ?> {
                                per: '<?= $p1['tgl']; ?>',
                                pm: <?= $p1['total']; ?>,
                                pl: <?= $tampil ?>
                            }
                        <?php $n1++;
                        } ?>
                    ],
                    resize: true
                });

                $MENU_TOGGLE.on('click', function() {
                    $(window).resize();
                });

            }
        };
        $(document).ready(function() {
            init_morris_charts();
        });
    </script>
<?php } ?>
<script src="<?= base_url() ?>matrix/dist/js/custom.min.js"></script>


<script src="<?= base_url() ?>matrix/extra-libs/DataTables/datatables.min.js"></script>

<script>
    $('#zero_config').DataTable();
</script>
</body>

</html>