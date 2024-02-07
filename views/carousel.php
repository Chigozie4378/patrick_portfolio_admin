<?php
include_once "../includes/header.php";
include_once "../includes/sidebar.php";
include_once "../includes/navbar.php";
$ctr = new SliderController();
$ctr->store();
$ctr->delete();
?>

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Slider</h4>

<div class="row">
  <div class="col-md-5">
    <div class="card mb-4">
      <h5 class="card-header">Slider Tile And Images</h5>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div>
            <label for="defaultFormControlInput" class="form-label">Slider Action</label>
            <input type="text" name="title" class="form-control" id="defaultFormControlInput" placeholder="Enter Slider Title" aria-describedby="defaultFormControlHelp" />

          </div>
          <div class="my-3">
            <label for="formFile" class="form-label">Slider Images</label>
            <input class="form-control" type="file" name="image" id="formFile" />
          </div>
          <div style="float: right;"><input type="submit" value="Submit" name="submit" class="btn btn-primary"></div>

      </div>
      </form>

    </div>
  </div>



  <div class="col-xl-7">

    <!-- File input -->
    <div class="card">
      <h5 class="card-header">Slider Edit</h5>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Slider Title</th>
                <th>Slider Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $select = $ctr->index();
                while ($result = mysqli_fetch_array($select)){?>

<tr>
                <td><?php echo $result['title']?></td>
                <td><img src="<?php echo $result['image']?>" alt="" height="50" width="50"></td>
               

                <td><a href="carousel.php?id=<?php  echo $result['id'] ?>&filepath=<?php  echo $result['image'] ?>&filepath2=<?php  echo $result['image2'] ?>"><i class="bx bx-trash me-1"></i></a></td>

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