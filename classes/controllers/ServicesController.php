<?php
class ServicesController extends Controller
{
    public function index()
    {
        return $this->fetchAll('services');
    }
    public function show()
    {
        if (isset($_GET['service_id'])) {
            $service_id = $_GET['service_id'];
            return $this->fetchWhereAnd("services", "id = $service_id");
        }
    }
    public function view()
    {
        if (isset($_GET['id_edit'])) {
            $id_edit = $_GET['id_edit'];
            return $this->fetchWhereAnd("services", "id = $id_edit");
            
        }
    }


    public function store()
    {
        if (isset($_POST["submit"])) {
            $title = Validate::valInput($_POST['title']);
            $description = Validate::valInput($_POST['description']);

            $filename = strtolower(str_replace(' ', '_', $title)) . '.php';
            $filepath = "../../patrick_portfolio/pages/services/";
            $link = $filepath . $filename;
            $introduction = "";
            $emphasize = "";
            $body = "";

            // Get the body from the form

            // Construct the content to write into the new PHP file
            $content = '<?php include "../../includes/header.php" ?>' . PHP_EOL;
            $content .= '<?php $ctr = new ServicesController(); ?>' . PHP_EOL;
            $content .= '<?php $select_service = $ctr->show(); ?>' . PHP_EOL;
            $content .= '<?php $service_result = mysqli_fetch_array($select_service); ?>' . PHP_EOL;
            $content .= '<body>' . PHP_EOL;
            $content .= '<?php include "../../includes/navbar.php" ?>' . PHP_EOL;
            $content .= '<div class="container-fluid text-center text-white" id="heading-bg2">
            <div style="padding-top:50px">
                <h1 style="text-transform: capitalize;">' . $title . '</h1>
    
            </div>
    
             </div>' . PHP_EOL;
            $content .= '<div class="container" style="text-align: justify;">' . PHP_EOL;
            $content .= '<div class="py-5">' . PHP_EOL;
            $content .= ' <?php echo $service_result[\'introduction\']?>' . PHP_EOL;
            $content .= '<blockquote style="color: #00aadc;">' . PHP_EOL;
            $content .= ' <?php echo $service_result[\'emphasize\']?>' . PHP_EOL;
            $content .= '</blockquote>' . PHP_EOL;
            $content .= ' <?php echo $service_result[\'body\']?>' . PHP_EOL;
            $content .= '</div>' . PHP_EOL;
            $content .= '</div>' . PHP_EOL;
            $content .= '<?php include_once "../../includes/footer.php" ?>' . PHP_EOL;
            $content .= '</body>' . PHP_EOL;
            $content .= '</html>' . PHP_EOL;

            // Write content to the new PHP file
            file_put_contents($filepath . $filename, $content); // Corrected file path here

            // Construct the content to write into the new PHP file
            $content2 = '<?php include_once "../includes/header.php"; ?>' . PHP_EOL;
            $content2 .= '<?php include_once "../includes/sidebar.php"; ?>' . PHP_EOL;
            $content2 .= '<?php include_once "../includes/navbar.php"; ?>' . PHP_EOL;
            $content2 .= '<?php $ctr = new ServicesController(); ?>' . PHP_EOL;
            $content2 .= '<?php $ctr->store2(); ?>' . PHP_EOL;
            $content2 .= '<?php $ctr->delete(); ?>' . PHP_EOL;
            $content2 .= '<?php $select_service = $ctr->show(); ?>' . PHP_EOL;
            $content2 .= '<?php $service_result = mysqli_fetch_array($select_service); ?>' . PHP_EOL;
            $content2 .= '' . PHP_EOL;
            $content2 .= '<?php echo "<h4 class=\"py-3 mb-4\"><span class=\"text-muted fw-light\">" . $service_result[\'title\'] . " Services</span></h4>"; ?>' . PHP_EOL;
            $content2 .= '' . PHP_EOL;
            $content2 .= '<div class="row">' . PHP_EOL;
            $content2 .= '    <div class="col-md-5">' . PHP_EOL;
            $content2 .= '        <div class="card mb-4">' . PHP_EOL;
            $content2 .= '            <h5 class="card-header">Services Title and Body</h5>' . PHP_EOL;
            $content2 .= '            <div class="card-body">' . PHP_EOL;
            $content2 .= '                <form action="" method="post">' . PHP_EOL;
            $content2 .= '                    <div>' . PHP_EOL;
            $content2 .= '                         <input type="hidden" name="id" value="<?php echo $service_result[\'id\']?>" />' . PHP_EOL;
            $content2 .= '                        <label for="defaultFormControlInput" class="form-label">Introduction</label>' . PHP_EOL;
            $content2 .= '                         <textarea name="introduction" id="" cols="30" rows="5" class="form-control"></textarea>' . PHP_EOL;
            $content2 .= '            </div>' . PHP_EOL;
            $content2 .= '' . PHP_EOL;
            $content2 .= '                    <div>' . PHP_EOL;
            $content2 .= '                        <label for="defaultFormControlInput" class="form-label">Key Note</label>' . PHP_EOL;
            $content2 .= '                         <textarea name="keynote" id="" cols="30" rows="5" class="form-control"></textarea>' . PHP_EOL;
            $content2 .= '' . PHP_EOL;
            $content2 .= '                    </div>' . PHP_EOL;
            $content2 .= '                    <div class="my-4">' . PHP_EOL;
            $content2 .= '                        <label for="defaultFormControlInput" class="form-label">Service Body</label>' . PHP_EOL;
            $content2 .= '                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>' . PHP_EOL;
            $content2 .= '                    </div>' . PHP_EOL;
            $content2 .= '                    <div style="float: right;"><input type="submit" name="submit_service" value="Submit" class="btn btn-primary"></div>' . PHP_EOL;
            $content2 .= '                </form>' . PHP_EOL;
            $content2 .= '            </div>' . PHP_EOL;
            $content2 .= '' . PHP_EOL;
            $content2 .= '        </div>' . PHP_EOL;
            $content2 .= '    </div>' . PHP_EOL;
            $content2 .= '' . PHP_EOL;
            $content2 .= '' . PHP_EOL;
            $content2 .= '    <div class="col-md-7">' . PHP_EOL;
            $content2 .= '' . PHP_EOL;
            $content2 .= '        <!-- File input -->' . PHP_EOL;
            $content2 .= '        <div class="card">' . PHP_EOL;
            $content2 .= '            <h5 class="card-header">Services Action</h5>' . PHP_EOL;
            $content2 .= '            <div class="card-body">' . PHP_EOL;
            $content2 .= '                <div class="table-responsive">' . PHP_EOL;
            $content2 .= '                    <table class="table table-bordered">' . PHP_EOL;
            $content2 .= '                        <thead>' . PHP_EOL;
            $content2 .= '                            <tr>' . PHP_EOL;
            $content2 .= '                                <th>Service Keynote</th>' . PHP_EOL;
            $content2 .= '                                <th>Service Body</th>' . PHP_EOL;
            $content2 .= '                                <th>Actions</th>' . PHP_EOL;
            $content2 .= '                            </tr>' . PHP_EOL;
            $content2 .= '                        </thead>' . PHP_EOL;
            $content2 .= '                        <tbody>' . PHP_EOL;
            $content2 .= '    <tr>' . PHP_EOL;
            $content2 .= '        <td><?php echo $service_result[\'emphasize\']?></td>' . PHP_EOL;
            $content2 .= '        <td><?php echo $service_result[\'body\']?></td>' . PHP_EOL;
            $content2 .= '        <td><a href="services.php?id=<?php echo $service_result[\'id\']?>"><i class="bx bx-trash me-1"></i></a></td>' . PHP_EOL;

            $content2 .= '    </tr>' . PHP_EOL;
            $content2 .= '' . PHP_EOL;
            $content2 .= '                        </tbody>' . PHP_EOL;
            $content2 .= '                    </table>' . PHP_EOL;
            $content2 .= '                </div>' . PHP_EOL;
            $content2 .= '            </div>' . PHP_EOL;
            $content2 .= '        </div>' . PHP_EOL;
            $content2 .= '    </div>' . PHP_EOL;
            $content2 .= '</div>' . PHP_EOL;
            $content2 .= '<?php include_once "../includes/footer.php"; ?>' . PHP_EOL;

            // Write content to the new PHP file
            file_put_contents($filename, $content2); // Corrected file path here
            $this->insert('services', $title, $description,$introduction, $emphasize, $body, $link);
            header("location:services.php");
        }
    }
    public function store2()
    {
        if (isset($_POST["submit_service"])) {
            $id = Validate::valInput($_POST['id']);
            $introduction = Validate::valInput($_POST['introduction']);
            $keynote = Validate::valInput($_POST['keynote']);
            $body = Validate::valInput($_POST['body']);

            $lines1 = explode("\n", $introduction);
            $lines2 = explode("\n", $keynote);
            $lines3 = explode("\n", $body);
            $new_paragraph_content1 = '';
            $new_paragraph_content2 = '';
            $new_paragraph_content3 = '';

            foreach ($lines1 as $line1) {
                if (trim($line1) !== '') {
                    $new_paragraph_content1 .= '<p>' . trim($line1) . '</p>';
                }
            }
            foreach ($lines2 as $line2) {
                if (trim($line2) !== '') {
                    $new_paragraph_content2 .= '<p>' . trim($line2) . '</p>';
                }
            }
            foreach ($lines3 as $line3) {
                if (trim($line2) !== '') {
                    $new_paragraph_content3 .= '<p>' . trim($line3) . '</p>';
                }
            }

            $this->updates(
                "services",
                U::col("introduction = $new_paragraph_content1","emphasize = $new_paragraph_content2","body = $new_paragraph_content3"),
                U::where("id = $id")
            );
        }
    }
    public function store3()
    {
        if (isset($_POST["submit"])) {
            $id = Validate::valInput($_POST['id']);
            $title = Validate::valInput($_POST['title']);
            $description = Validate::valInput($_POST['description']);

            $this->updates(
                "services",
                U::col("title = $title","description = $description"),
                U::where("id = $id")
            );
            echo "<script>
                document.getElementById('success').style.display='block';
                setTimeout(function(){
                    window.location = 'services.php'
                 }, 1000);
                    </script>";
        }
    }

    public function delete()
    {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $title = $_GET['title'];
            $filename = strtolower(str_replace(' ', '_', $title)) . '.php';
            $filepath1 = "../../patrick_portfolio/pages/services/";
            unlink($filepath1 . $filename);
            unlink($filename);

            $this->trashWhere("services", "id = $id");
            header("location:services.php");
        }
    }
}
