<?php

require_once('system/DB.php');

class Content_Model extends DB
{
    //Content_Model for Customer to view changable text on UI
    //working with `content_manager` table
    public function getPageList() {
        $query = "SELECT page FROM `content_manager`";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_array($row, MYSQLI_ASSOC);
    }
    public function getDataFromPage(string $page)
    {
        $query = "SELECT title, content FROM `content_manager` WHERE page = '$page'";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_all($row, MYSQLI_ASSOC);
    }
    public function updateContent() {
        
    }
}