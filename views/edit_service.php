<?php
include_once "../includes/header.php";
include_once "../includes/sidebar.php";
include_once "../includes/navbar.php";
$ctr = new ServicesController();
$ctr->store3();
$select = $ctr->view();
$result = mysqli_fetch_array($select);
             
?>

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Services</h4>

<div class="row">
    <div class="offset-md-3 col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">Services Title and Body</h5>
            <p id="success"></p>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $result["id"];?>">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Service Title</label>
                        <input type="text" name="title" class="form-control" id="defaultFormControlInput"  aria-describedby="defaultFormControlHelp" onclick="select()" value="<?php echo $result["title"];;?>"/>

                    </div>
                    <div class="my-4">
                        <label for="defaultFormControlInput" class="form-label">Service Description</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control" onclick="select()" ><?php echo $result["description"];?></textarea>
                    </div>
                    <div><a href="services.php" class="btn btn-primary">Go Back</a><input style="float: right;" type="submit" name="submit" value="Update" class="btn btn-success"></div>
                </form>
            </div>

        </div>
    </div>



   
</div>
<?php
include_once "../includes/footer.php";
?>