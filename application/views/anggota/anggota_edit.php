<div class="row">
    <div class="col-lg-12"><br />
       
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('anggota'); ?>">Anggota</a></li>
            <li class="active">Edit Anggota</li>
        </ol>

        <?php
            echo validation_errors();
            //buat message nis
            if(!empty($message)) {
            echo $message;
            }
        ?>

    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-default">

            <div class="panel-heading">
                Edit Anggota
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
            <?php
                //validasi error upload
                if(!empty($error)) {
                    echo $error;
                }
            ?>
            <?php echo form_open_multipart('anggota/update', array('class' => 'form-horizontal', 'id' => 'jvalidate')) ?>

                <!-- Hidden field untuk menyimpan NIS lama -->
                <input type="hidden" name="nis_lama" value="<?php echo $edit['nis']; ?>">

                <div class="form-group">
                    <p class="col-sm-2 text-left">Sektor </p>

                    <div class="col-sm-10">
                        <input type="text" name="nis" class="form-control" placeholder="Sektor" value="<?php echo $edit['nis']; 
                        ?>" maxlength="10">
                        <small class="text-muted">Sektor dapat berupa angka dan huruf (maksimal 10 karakter)</small>
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Nama </p>

                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $edit['nama'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Jenis Kelamin </p>

                    <div class="col-sm-10">
                    <?php 
                    $jenis_kelamin = array('L' => 'Laki-Laki', 'P' => 'Perempuan'); 
                    echo form_dropdown('jenis',$jenis_kelamin,$edit['jk'],"class='form-control'");    
                    ?>
                   
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Tanggal Lahir </p>

                    <div class="col-sm-10">
                        <input type="text" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" id="tanggal"  value="<?php echo $edit['ttl'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Alamat </p>

                    <div class="col-sm-10">
                        <input type="text" name="kelas" class="form-control" placeholder="Alamat"  value="<?php echo $edit['kelas']; ?>">
                    </div>
                </div>


                <div class="form-group">
                    <p class="col-sm-2 text-left">Images</p>

                    <div class="col-sm-10">
                        <?php if($edit['image'] != '') { ?>
                            <img src="<?php echo base_url('assets/img/anggota/'.$edit['image']);?>" width="100px" height="100px">
                        <?php }else{ ?>
                            <img src="<?php echo base_url('assets/img/anggota/images.jpg');?>" width="100px" height="100px">
                        <?php } ?> <br /><br />
                        <input type="file" name="userfile" class="form-control btn-file"  value="<?php echo set_value('userfile'); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Username </p>

                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" placeholder="Username" 
                        value="<?php echo $edit['username'] ?>" minlength="3" maxlength="20" oninput="this.value = this.value.replace(/[^a-zA-Z0-9_]/g, '')">
                        <small class="text-muted">Minimal 3 karakter, maksimal 20 karakter. Hanya huruf, angka, dan underscore (_)</small>
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">Password </p>

                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" placeholder="Password" minlength="6">
                        <small class="text-muted">Minimal 6 karakter (kosongkan jika tidak ingin mengubah password)</small>
                    </div>
                </div>

                <div class="form-group">
                    <p class="col-sm-2 text-left">User Akses </p>

                    <div class="col-sm-10">
                    <?php
                    $uk = array(1 => 'Administrator', 2 => 'Anggota'); 
                    echo form_dropdown('akses',$uk,$edit['user_akses'],"class='form-control'");
                    ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6">
                        <div class="btn-group pull-left">
                            <?php echo anchor('anggota', 'Cancel', array('class' => 'btn btn-danger btn-sm')); ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="btn-group pull-right">
                            <input type="submit" name="update" value="Update" class="btn btn-success btn-sm">
                        </div>
                    </div>
                </div>
            <?php echo form_close(); ?>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>


<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Datepicker -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/js/bootstrap-datepicker.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>



<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>


<script type="text/javascript">              
$(document).ready(function() {
    $("#tanggal1").datepicker({
        format:'yyyy-mm-dd'
    });
    
    $("#tanggal2").datepicker({
        format:'yyyy-mm-dd'
    });
    
    $("#tanggal").datepicker({
        format:'yyyy-mm-dd'
    });
})
</script>