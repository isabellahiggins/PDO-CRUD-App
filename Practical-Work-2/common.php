<?php
    function escape($data) {
        //If the data is null return null instead of error
        if($data == null){
            return null;
        }
    $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    $data = trim($data);
    $data = stripslashes($data);
    return ($data);
}