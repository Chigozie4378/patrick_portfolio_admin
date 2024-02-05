<?php
class ExportController extends Controller{
    public function e(){
        if (isset($_POST['submit'])){
            $this->export();
        }
        
    }
}