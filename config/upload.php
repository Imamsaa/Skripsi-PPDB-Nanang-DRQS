<?php

function cekImage(string $tmp_name) : bool
{
    if (getimagesize($tmp_name) !== false) {
        return true;
    }else{
        return false;
    }
}

function sizeImage(int $imagesize, int $size) : bool
{
    if ($imagesize <= $size) 
    {
        return true;
    }
    else
    {
        return false;
    }
}

function typeImage(array $type, string $name) : bool
{
    $result = pathinfo($name, PATHINFO_EXTENSION);
    if (!in_array($result, $type)) {
        return true;
    }else{
        return false;
    }
}

function upload(string $identity , array $file, int $size, array $allow, string $folder) : string | int
{
    $name = $file[$identity]['name'];
    $type = $file[$identity]['type'];
    $tmp_name = $file[$identity]['tmp_name'];
    $error = $file[$identity]['error'];
    $imagesize = $file[$identity]['size'];
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    $newname = "img".random_int(1,1000).date('YmdHs').".".$ext;
    if (sizeImage($imagesize,$size)) {
        if (typeImage($allow,$name)) {
            // file type doesnt allowed
            return 1;
        }else{
            $destination = __DIR__."/../asset/".$folder."/".$newname;
            move_uploaded_file($tmp_name,$destination);
            // file uploaded
            return $folder."/".$newname; 
        }
    }else{
        // File size is to longger
        return 2;
    }
}

function uploadCustom(string $identity , array $file, int $size, array $allow, string $folder,string $namefile) : string | int
{
    $name = $file[$identity]['name'];
    $type = $file[$identity]['type'];
    $tmp_name = $file[$identity]['tmp_name'];
    $error = $file[$identity]['error'];
    $imagesize = $file[$identity]['size'];
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    $newname = $namefile.".".$ext;
    if (sizeImage($imagesize,$size)) {
        if (typeImage($allow,$name)) {
            // file type doesnt allowed
            return 1;
        }else{
            $destination = __DIR__."/../assets/".$folder."/".$newname;
            move_uploaded_file($tmp_name,$destination);
            // file uploaded
            return $folder."/".$newname; 
        }
    }else{
        // File size is to longger
        return 2;
    }
}
?>
