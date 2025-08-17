<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | HKBPCipcil</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Isi CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/custom.css" rel="stylesheet">

    <!-- Custom Login CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/customlogin.css" rel="stylesheet"> 

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container-fluid bg-primary text-white p-3">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 style="margin-top:10px;">Perpustakaan HKBP Cipayung Cilangkap</h3>
                <p>Gg. Sejuk No.38, RT.7/RW.4, Cipayung, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13840</p>
            </div>
        </div>
    </div>

    <div class="navbar navbar-default">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('');?>"><strong>HKBPCipcil</strong></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url('login');?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <!-- <li><a href="<?php echo site_url('login/view_anggota');?>"><i class="glyphicon glyphicon-user"></i> Anggota</a></li> -->
                <li><a href="<?php echo site_url('login/view_buku');?>"><i class="glyphicon glyphicon-book"></i> Buku</a></li>
            </ul>
            <div class="nav navbar-nav navbar-right">
                <!-- Form search book dihapus sesuai permintaan -->
            </div>
        </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- end navbar -->
    
    <!-- line-height -->
    <br />
    <div class="container">
    <div class="row">
    <div class="col-md-12">      
    <?php
    if(!empty($pesan)) {
        echo $pesan;
    }
    ?>
    </div>
    </div>
    </div>       
    <br />

<div class="container">
<div class="row">
    <div class="col-md-8">
        <h4>Welcome To Perpustakaan Online HKBP Cipayung Cilangkap</h4>
        <hr class="line-title">
        <img src="<?php echo base_url(); ?>assets/img/HKBP.jpg" alt="Belum Tersedia" class="img-thumbnail">
        <p>Gereja HKBP Cipayung Cilangkap merupakan salah satu gereja yang berada di wilayah Resort HKBP Cipayung. Gereja ini resmi didirikan pada tanggal 24 Februari 1991. 
            Hingga tahun 2025, gereja ini telah melayani umat selama 34 tahun. Dalam kurun waktu tersebut, 
            HKBP Cipayung Cilangkap telah mengalami pertumbuhan dan perkembangan yang cukup signifikan dalam hal pelayanan dan jumlah jemaat.</p>
        <p>Berdasarkan data statistik per tanggal 11 Maret 2025 yang tercatat dalam database Balitbang HKBP, 
            jumlah kepala keluarga (KK) yang menjadi anggota aktif jemaat HKBP Cipayung Cilangkap mencapai 781 KK,
            dengan total jumlah jiwa sebanyak 2.829 orang. Jemaat ini tersebar ke dalam 14 wijk (lingkungan pelayanan), 
            yang masing-masing rutin melaksanakan partangiangan sektor (ibadah lingkungan) sekali dalam seminggu sebagai bentuk persekutuan yang erat antarjemaat.</p>
        <p>Dalam pelayanannya, dua wijk dilayani langsung oleh Pendeta, sementara dua belas wijk lainnya dilayani oleh para Sintua secara bergiliran setiap minggunya. 
            Ibadah Minggu sebagai inti dari pelayanan gerejawi dilaksanakan sebanyak lima kali setiap minggu, yang mencakup ibadah umum, Sekolah Minggu bagi anak-anak, serta pelayanan ibadah kepada remaja. 
            Tingkat kehadiran jemaat dalam ibadah Minggu tercatat rata-rata sebanyak 916 orang setiap minggunya, atau sekitar 33,55% dari total keseluruhan anggota jemaat.</p>
        <p>Untuk menjalankan kegiatan pelayanan ini, HKBP Cipayung Cilangkap didukung oleh sumber daya pelayan gereja yang terdiri dari 2 orang Pendeta sebagai pelayan firman, 35 orang Sintua sebagai pelayan jemaat di lingkungan/wijk, serta 2 orang calon sintua yang sedang menjalani masa persiapan untuk menjadi pelayan penuh waktu.
            Sinergi dari seluruh pelayan ini memungkinkan gereja untuk tetap aktif dalam menjangkau dan melayani seluruh lapisan jemaat, baik dalam bentuk ibadah rutin, pelayanan pastoral, maupun kegiatan sosial lainnya.</p>       
        </div>

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-lock"></span> <strong>LOGIN</strong>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('login'); ?>" method="post">
                    <?php echo $this->session->flashdata('message'); ?>
                    <div class="form-group">
                        <p class="col-sm-3">Username </p>
                        <div class="col-sm-9">
                           <?php echo form_error('username'); ?>
                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" value="<?php echo set_value('username'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="col-sm-3">Password </p>
                        <div class="col-sm-9">
                            <?php echo form_error('password'); ?>
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" value="<?php echo set_value('password'); ?>">
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" name="proses" class="btn btn-success btn-sm">Sign in</button>
                            <button type="reset" class="btn btn-default btn-sm">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>

</body>

</html>
