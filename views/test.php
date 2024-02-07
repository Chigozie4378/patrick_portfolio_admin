<?php
if(isset($_POST['submit'])){
    // Get the title from the form
    $title = $_POST['title'];
    
    // Replace spaces with underscores and make lowercase for filename
    $filename = strtolower(str_replace(' ', '_', $title)) . '.php';
    
    // Get the body from the form
    $body = $_POST['body'];
    
    // Construct the content to write into the new PHP file
    $content = '<?php include "../../includes/header.php" ?>' . PHP_EOL;
    $content .= '<body>' . PHP_EOL;
    $content .= '<?php include "../../includes/navbar.php" ?>' . PHP_EOL;
    $content .= '<?php include "../../includes/heading.php" ?>' . PHP_EOL;
    $content .= '<div class="container" style="text-align: justify;">' . PHP_EOL;
    $content .= '<div class="py-5">' . PHP_EOL;
    $content .= '<p>' . $body . '</p>' . PHP_EOL;
    $content .= '</div>' . PHP_EOL;
    $content .= '</div>' . PHP_EOL;
    $content .= '<?php include_once "../../includes/footer.php" ?>' . PHP_EOL;
    $content .= '</body>' . PHP_EOL;
    $content .= '</html>' . PHP_EOL;
    
    // Write content to the new PHP file
    file_put_contents($filename, $content);
    
    // Success message
    echo '<div class="alert alert-success" role="alert">File created successfully: ' . $filename . '</div>';
}
?>

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
