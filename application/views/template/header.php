<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Manajemen Keuangan Berkah Aquatic">
    <meta name="author" content="Hikayat">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>images/uang.jpg">
    <title>
        <?= $judul ?>
    </title>

    <link href="<?= base_url() ?>matrix/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?= base_url() ?>matrix/dist/css/style.min.css" rel="stylesheet">
    <style>
        @media print {

            .no-print,
            .card-header {
                display: none !important;
            }

            .cnt {
                padding-top: 0px !important;
                margin-left: 0px !important;
            }

            @page {
                size: landscape;
            }
        }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar no-print" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="mdi mdi-view-sequential mdi-close"></i></a>
                    <a class="navbar-brand" href="<?= base_url() ?>">
                        <b class="logo-icon p-l-10">
                            <img src="<?= base_url() ?>images/111.jpg" alt="homepage" class="light-logo " />
                        </b>
                        <span class="logo-text">
                            AQUATIC
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="mdi mdi-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-view-sequential font-24"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown show">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img src="<?= base_url() ?>images/users/lgg.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="<?= base_url() ?>Dashboard/ubah_password">
                                    <i class="mdi mdi-settings m-r-5 m-l-5"></i> Ubah Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url() ?>Auth/logout">
                                    <i class="mdi mdi-power m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <?php $this->load->view('template/menu'); ?>


        <div class="page-wrapper cnt">

            <?PHP if ($judul != 'DASHBOARD') { ?>
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">
                                <?= $judul ?>
                            </h4>
                        </div>
                    </div>
                </div>
            <?PHP } ?>

            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">