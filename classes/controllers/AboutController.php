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
            $filepath = "../assets/images/".$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],$filepath);
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
                    U::col("title = $title", "body = $new_paragraph_content","image =  $filepath"),
                    U::where("id = 1")
                );
            } else {
                $this->insert('about', $title, $new_paragraph_content,$filepath);
            }
        }
        // if (isset($_POST["submit"])) {
        //     $title = Validate::valInput($_POST['title']);
        //     $body = Validate::valInput($_POST['body']);
        //     $filepath = "../assets/images/".$_FILES['image']['name'];
        //     move_uploaded_file($_FILES['image']['tmp_name'],$filepath);
        
        //     // Check if any of the inputs are empty
        //     if (!empty($title) || !empty($body)) {
        //         $lines = explode("\n", $body);
        //         $new_paragraph_content = '';
        //         foreach ($lines as $line) {
        //             if (trim($line) !== '') {
        //                 $new_paragraph_content .= '<p>' . trim($line) . '</p>';
        //             }
        //         }
        
        //         $fetch = $this->fetchAll('about');
        //         if (mysqli_num_rows($fetch) > 0) {
        //             // Update only if inputs are not empty
        //             $updateCols = [];
        //             if (!empty($title)) {
        //                 $updateCols[] = "title = '$title'";
        //             }
        //             if (!empty($new_paragraph_content)) {
        //                 $updateCols[] = "body = '$new_paragraph_content'";
        //             }
        //             if (!empty($filepath)) {
        //                 $updateCols[] = "image = '$filepath'";
        //             }
        //             $this->updates(
        //                 "about",
        //                 implode(", ", $updateCols),
        //                 U::where("id = 1")
        //             );
        //         } else {
        //             // Insert only if inputs are not empty
        //             $this->insert('about', $title, $new_paragraph_content, $filepath);
        //         }
        //     } else {
        //         // Inputs are empty, do nothing
        //         echo "Inputs are empty!";
        //     }
        // }
        
    }
}
