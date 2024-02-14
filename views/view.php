<?php 
include_once "../classes/autoload.php";
$ctr = new ServicesController(); ?>
            <?php $select_service = $ctr->show(); ?>
            <?php $service_result = mysqli_fetch_array($select_service); ?>
            
            <?php echo $service_result['title']?> Services