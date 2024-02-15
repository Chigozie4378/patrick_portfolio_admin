<?php include_once "../includes/header.php"; ?>
<?php include_once "../includes/sidebar.php"; ?>
<?php include_once "../includes/navbar.php"; ?>
<?php $ctr = new ServicesController(); ?>
<?php $ctr->store2(); ?>
<?php $ctr->delete(); ?>
<?php $select_service = $ctr->show(); ?>
<?php $service_result = mysqli_fetch_array($select_service); ?>

<?php echo "<h4 class=\"py-3 mb-4\"><span class=\"text-muted fw-light\">" . $service_result['title'] . " Services</span></h4>"; ?>

<div class="row">
    <div class="col-md-5">
        <div class="card mb-4">
            <h5 class="card-header">Services Title and Body</h5>
            <div class="card-body">
                <form action="" method="post">
                    <div>
                         <input type="hidden" name="id" value="<?php echo $service_result['id']?>" />
                        <label for="defaultFormControlInput" class="form-label">Introduction</label>
                         <textarea name="introduction" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>

                    <div>
                        <label for="defaultFormControlInput" class="form-label">Key Note</label>
                         <textarea name="keynote" id="" cols="30" rows="5" class="form-control"></textarea>

                    </div>
                    <div class="my-4">
                        <label for="defaultFormControlInput" class="form-label">Service Body</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div style="float: right;"><input type="submit" name="submit_service" value="Submit" class="btn btn-primary"></div>
                </form>
            </div>

        </div>
    </div>


    <div class="col-md-7">

        <!-- File input -->
        <div class="card">
            <h5 class="card-header">Services Action</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Service Keynote</th>
                                <th>Service Body</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
    <tr>
        <td><?php echo $service_result['emphasize']?></td>
        <td><?php echo $service_result['body']?></td>
        <td><a href="services.php?id=<?php echo $service_result['id']?>"><i class="bx bx-trash me-1"></i></a></td>
    </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "../includes/footer.php"; ?>
