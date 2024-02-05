<?php
include_once "../includes/header.php";
include_once "../includes/sidebar.php";
include_once "../includes/navbar.php";
$ctr = new IntroductionController();
$ctr->store();
?>

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Introduction</h4>

<div class="row">
    <div class="col-md-5">
        <div class="card mb-4">
            <h5 class="card-header">Introduction</h5>
            <div class="card-body">
               <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <div class="form-group">
                    <label for="defaultFormControlInput" class="form-label">Intoduction Body</label>
                    <textarea name="body" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="mt-3" style="float: right;">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </div>
                
               </form>
                


            </div>
        </div>
    </div>

    <div class="col-xl-7">

        <!-- File input -->
        <div class="card">
            <div class="card-body">
                <p class="card-text">
                    <?php 
                    $select = $ctr->index();
                    $result = mysqli_fetch_array($select);
                    echo $result['body'];
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
include_once "../includes/footer.php";
?>