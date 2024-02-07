<?php
include_once "../includes/header.php";
include_once "../includes/sidebar.php";
include_once "../includes/navbar.php";
$ctr = new ServicesController();
$ctr->store();
$ctr->delete();
?>

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Services</h4>

<div class="row">
    <div class="col-md-5">
        <div class="card mb-4">
            <h5 class="card-header">Services Title and Body</h5>
            <div class="card-body">
                <form action="" method="post">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Service Title</label>
                        <input type="text" name="title" class="form-control" id="defaultFormControlInput" placeholder="Enter Slider Title" aria-describedby="defaultFormControlHelp" />

                    </div>
                    <div class="my-4">
                        <label for="defaultFormControlInput" class="form-label">Services Body</label>
                        <textarea name="body" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div style="float: right;"><input type="submit" name="submit" value="Submit" class="btn btn-primary"></div>
                </form>
            </div>

        </div>
    </div>



    <div class="col-xl-7">

        <!-- File input -->
        <div class="card">
            <h5 class="card-header">Services Action</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Service Title</th>
                                <th>Service Body</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = $ctr->index();
                            while ($result = mysqli_fetch_array($select)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $result['title']?>
                                    </td>
                                    <td><?php echo $result['body']?></td>

                                    <td><a href="services.php?id=<?php echo $result['id']?>"><i class="bx bx-trash me-1"></i></a></td>

                                </tr>
                            <?php  }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "../includes/footer.php";
?>