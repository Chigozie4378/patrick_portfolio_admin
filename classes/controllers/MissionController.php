<?php

class MissionController extends Controller
{
    public function index()
    {
        return $this->fetchAll('mission');
    }

    public function store()
    {
        if (isset($_POST["submit"])) {
            $body = Validate::valInput($_POST['body']);
            $fetch = $this->fetchAll('mission');

            $lines = explode("\n", $body);
            $new_paragraph_content = '';
            foreach ($lines as $line) {
                if (trim($line) !== '') {
                    $new_paragraph_content .= '<p>' . trim($line) . '</p>';
                }
            }


            if (mysqli_num_rows($fetch) > 0) {
                $this->updates(
                    "mission",
                    U::col("body = $new_paragraph_content"),
                    U::where("id = 1")
                );
            } else {
                $this->insert('mission', $new_paragraph_content);
            }
        }
    }
}
