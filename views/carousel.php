<?php
include_once "../includes/header.php";
include_once "../includes/sidebar.php";
include_once "../includes/navbar.php";
?>

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Slider</h4>

<div class="row">
  <div class="col-md-5">
    <div class="card mb-4">
      <h5 class="card-header">Slider Tile And Images</h5>
      <div class="card-body">
        <div>
          <label for="defaultFormControlInput" class="form-label">Slider Action</label>
          <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Enter Slider Title" aria-describedby="defaultFormControlHelp" />

        </div>
        <div class="my-3">
          <label for="formFile" class="form-label">Slider Images</label>
          <input class="form-control" type="file" id="formFile" />
        </div>
        <div style="float: right;"><input type="submit" value="Submit" class="btn btn-primary"></div>

      </div>
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
              <tr>
                <td>
                  <i class="bx bxl-angular bx-sm text-danger me-3"></i>
                  <span class="fw-medium">Angular Project</span>
                </td>
                <td>Albert Cook</td>

                <td><a href="#"><i class="bx bx-trash me-1"></i></a></td>

              </tr>

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