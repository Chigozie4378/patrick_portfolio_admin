<?php
include_once "../includes/header.php";
include_once "../includes/sidebar.php";
include_once "../includes/navbar.php";
$ctr = new AboutController();
$ctr->store();
?>

<h4 class="py-3 mb-4"><span class="text-muted fw-light">About</h4>

<div class="row">
    <div class="col-md-5">
        <div class="card mb-4">
            <h5 class="card-header">About Us</h5>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">

                    <div>
                        <label for="defaultFormControlInput" class="form-label">About Title</label>
                        <input type="text" name="title" class="form-control"  placeholder="Enter Title"  />

                    </div>
                    <div>
                        <label for="defaultFormControlInput" class="form-label">About Body</label>
                        <textarea name="body" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="my-3">
                        <label for="formFile" class="form-label">About Images</label>
                        <input class="form-control" type="file" name="image" id="formFile" />
                    </div>
                    <div style="float: right;"><input type="submit" name="submit" value="Submit" class="btn btn-primary"></div>
                </form>
            </div>
        </div>
    </div>



    <div class="col-xl-7">

        <!-- File input -->
        <div class="card">
            <h5 class="card-header">About Edit</h5>
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>About Title</th>
                                <th>About Body</th>
                                <th>About Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = $ctr->index();
                            while ($result = mysqli_fetch_array($select)) { ?>
                                <tr>
                                    <td><?php echo $result['title']?></td>
                                    <td><?php echo $result['body']?></td>
                                    <td><img src="<?php echo $result['image']?>" height="50" width="50" alt=""></td>

                                    <td><a href="about.php?id = <?php echo $result['body']?>"><i class="bx bx-trash me-1"></i></a></td>

                                </tr>
                            <?php   }

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