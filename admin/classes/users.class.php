<?php

class Users extends Dbh {

    protected function addCats($cat_title){
        if(empty($cat_title)){
            echo "<div class='alert alert-warning'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                Could Not Add Post Category. please, Insert a course Category
                </div>";
        }else{
            $query = $this->connect()->query("INSERT INTO categories VALUES ('', '$cat_title')");
            if($query){
                echo "<div class='alert alert-success'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                <h4 style='color:#1a1a1a; text-align:center; font-weight:bold; display:block;'>Post Category Added</h4>
                </div>";
            }
        }


    }
}
