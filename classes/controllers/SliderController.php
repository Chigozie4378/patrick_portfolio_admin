<?php
class SliderController extends Controller
{
    public function index()
    {
        return $this->fetchAll('slider');
    }

    public function store()
    {
        if (isset($_POST["submit"])) {
            $title = Validate::valInput($_POST['title']);
            $filepath1 = "../assets/images/".$_FILES['image']['name'];
            $filepath2 = "../../patrick_portfolio_admin/assets/images/".$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],$filepath1);
            move_uploaded_file($_FILES['image']['tmp_name'],$filepath2);
           
                $this->insert('slider', $title, $filepath1, $filepath2);
           
        }
        
        
    }
    public function delete()
    {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $filepath1 = $_GET["image"];
            $filepath2 = $_GET["image2"];
            unlink($filepath1);
            unlink($filepath2);
            return $this->trashWhere("slider", "id = $id");
        }
    }
}
