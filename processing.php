<?php require_once("includes/header.php"); 

if (!isset($_POST["uploadButton"])) {
    echo "No file sent to page";
    // stops executing any code like break does in Python 
    exit();
}

$videoDataArray = new VideoUploadData(
    $_POST["fileInput"],
    $_POST["titleInput"],
    $_POST["descriptionInput"],
    $_POST["privacyInput"],
    $_POST["catagoryInput"],
    "RePlace-This"
    
);

?>

