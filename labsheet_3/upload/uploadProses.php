<?php 
if ($_FILES["fileToUpload"] ["error"] == 0){
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/".$_FILES["fileToUpload"]["name"]);
    echo 'file berhasil diupload';
} else {
    echo 'file gagal diupload';
}