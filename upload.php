<?php require_once("includes/header.php"); ?>
<?php require_once("includes/classes/videoDetailsFormProvider.php") ?>

<div class="column">

    <?php 
    $formProvider = new videoDetailsFormProvider();
    echo $formProvider -> createUpload();

    // getting data from categories table
    $catagory = $config -> prepare("SELECT * FROM categories");
    $catagory -> execute();

    // looping through database of categories then printing the data we've looped through
    while ($row = $catagory -> fetch(PDO::FETCH_ASSOC)) {
        echo $row["name"] . "<br>"; 
    }
    ?>

</div> 

<?php require_once("includes/footer.php"); ?>