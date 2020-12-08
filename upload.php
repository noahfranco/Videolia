<?php require_once("includes/header.php"); ?>
<?php require_once("includes/classes/videoDetailsFormProvider.php") ?>

<div class="column">

    <?php 
    // $config is coming from videoDetailsFormProvider.php
    $formProvider = new videoDetailsFormProvider($config);
    echo $formProvider -> createUpload();
    ?>

</div> 

<?php require_once("includes/footer.php"); ?>