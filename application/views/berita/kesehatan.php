<br />
<div class="panel panel-default">
    <div class="panel-heading">

    <div class="row">
        <div class="col-lg-12">
            BERITA KESEHATAN - VOA INDONESIA
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    </div>

    <div class="panel-body">
        <?php
            $xml = simplexml_load_file
            ("https://www.voaindonesia.com/api/ztgq_ei_ov");
            foreach ($xml->channel->item as $item){
            echo "Judul:<h3>".$item->title."</h3>";
            echo "<img src= '".$item->enclosure['url']."' width='400px'></img><br>";
            echo "Link: <a href = '".$item->link."' target='blank'>$item->link</a><br>";
            echo "Tanggal Terbit: ".$item->pubDate."<br>";
            echo "Deskripsi: ".$item->description."<br><br><br><br><br>";
            }
        ?>
    </div>   
</div>


<!-- jQuery -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo base_url(); ?>template/backend/sbadmin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>


<!-- test jquery -->
<script type="text/javascript">

    $(document).ready(function(){
        // alert('test jquery');
        
    });
</script>