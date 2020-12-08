<?php 

class VideoUploadData {

    private $videoDataArray, $title, $description, $privacy, $category, $uploadedBy; 

    public function __construct($videoDataArray, $title, $description, $privacy, $category, $uploadedBy) {
        $this->videoDataArray = $videoDataArray;
        $this->title = $title;
        $this->description = $description;
        $this->privacy = $privacy;
        $this->category = $category;
        $this->uploadedBy = $uploadedBy;
    }

    public function getVideoDataArray($videoDataArray) {
        $this->videoDataArray;
    }

    public function getTitle($title) {
        $this->title;
    }
}

?>