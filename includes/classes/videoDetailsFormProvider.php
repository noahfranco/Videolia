<?php 

class videoDetailsFormProvider {

    // declared config variable inside the videoDetailsFormProvider class
    private $config;

    public function __construct($config) {
        $this->config = $config;
    }
    
    public function createUpload() {
        $fileInput = $this -> createFileInput();
        $titleInput = $this -> createTitleInput();
        $descriptionInput =  $this -> createDescriptionInput(); 
        $dropDown = $this -> createPrivacy();
        $catagoriesInput = $this -> createCategoriesInput($config);
         return "<form action='processing.php' method='POST'> 
            $fileInput
            $titleInput
            $descriptionInput
            $dropDown
         </form>";
    }

    // use private to create a function that can only be accessed within the class it was created in
    private function createFileInput() {
           return "<div class='form-group'>
            <label for='exampleFormControlFile1'> Your file </label>
            <input type='file' class='form-control-file' id='exampleFormControlFile1' name='fileInput'>
            </div>";
    }

    private function createTitleInput() {
        return "<div class='input-group input-group-sm mb-3'>
        <div class='input-group-prepend'>
        </div>
        <input type='text' class='form-control' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-sm' placeholder='Title' name='titleInput'>
      </div>";
    }

    private function createDescriptionInput() {
        return "<div class='input-group mb-3'>
        <div class='input-group-prepend'>
        </div>
        <textarea type='text' class='form-control' placeholder='Description' name='descriptionInput' rows='3'></textarea>
      </div>";
    }

    private function createPrivacy() {
        return "<div class='form-group'> 
            <select class='custom-select' name='privacyInput'>
                <option selected>Choose...</option>
                <option value='0'> Private </option>
                <option value='1'> Public </option>
      </select>
        </div>";
    }

    private function createCategoriesInput($config) {
        // getting data from categories table
        $catagory = $this->config->prepare("SELECT * FROM categories");
        $catagory -> execute();

        // looping through database of categories then printing the data we've looped through
        while ($row = $catagory->fetch(PDO::FETCH_ASSOC)) {
            echo $row["name"] . "<br>"; 
            }
        }
}

?>