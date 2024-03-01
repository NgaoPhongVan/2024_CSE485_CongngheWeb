<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];
    $user['name'] = filter_input(INPUT_POST,'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $allowedExtensions = ['jpg','jpeg','png'];
    $maxSize = 1048576;
    $targetDir = "./assets/upload";

    if (!empty($_FILES['avatar']['tmp_name'])){
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array($fileInfo['extension'], $allowedExtensions)){
            $errors[] = "Only JPG, JPEG, and PNG";
        }elseif ($_FILES['avatar']['size']>$maxSize){
            $errors[] = "Less than 1MB";
        }else{
            $fileName = uniqid().".".$fileInfo['extension'];
            $targetFile = $targetDir.$fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'],$targetFile)){
                $user['avatar'] = $targetFile;
            }else{
                $errors[]="Falied";
            }
        }
    }

    if (empty($errors)){
        echo "Successfully";
    }else{
        echo "Error: ";
        foreach ($errors as $error){
            echo "<br> - $error";
        }
    }
}
?>