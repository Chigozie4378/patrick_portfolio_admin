<?php
class IntroductionController extends Controller
{
    public function index()
    {
        return $this->fetchAll('introduction');
    }

    public function store()
    {
        if (isset($_POST["submit"])) {
            $body = Validate::valInput($_POST['body']);
            $fetch = $this->fetchAll('introduction');

            if (mysqli_num_rows($fetch) > 0){
                $this->updates(
                    "introduction",
                    U::col("body = $body"),
                    U::where("id = 1")
                );
            }else{
                $this->insert('introduction', $body);
            }
                
        }
    }

   
}
