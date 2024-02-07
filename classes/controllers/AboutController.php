<?php

class AboutController extends Controller
{
    public function index()
    {
        return $this->fetchAll('about');
    }

    public function store()
    {
        if (isset($_POST["submit"])) {
            $title = Validate::valInput($_POST['title']);
            $body = Validate::valInput($_POST['body']);
            $filepath1 = "../assets/images/".$_FILES['image']['name'];
            $filepath2 = "../../patrick_portfolio_admin/assets/images/".$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],$filepath1);
            move_uploaded_file($_FILES['image']['tmp_name'],$filepath2);
            $fetch = $this->fetchAll('about');

            $lines = explode("\n", $body);
            $new_paragraph_content = '';
            foreach ($lines as $line) {
                if (trim($line) !== '') {
                    $new_paragraph_content .= '<p>' . trim($line) . '</p>';
                }
            }


            if (mysqli_num_rows($fetch) > 0) {
                $this->updates(
                    "about",
                    U::col("title = $title", "body = $new_paragraph_content","image =  $filepath1","image2 =  $filepath2"),
                    U::where("id = 1")
                );
            } else {
                $this->insert('about', $title, $new_paragraph_content,$filepath1, $filepath2);
            }
        }
        
        
        
       
        
    }
}
