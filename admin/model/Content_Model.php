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
        $query = "SELECT title, content, page FROM `content_manager` WHERE page LIKE '$page'";
        $row = mysqli_query(parent::connect(), $query);
        return mysqli_fetch_all($row, MYSQLI_ASSOC);
    }
    public function updateContent($id, $title, $content, $page) {
        $query = "UPDATE content_manager SET title = '$title', content = '$content' WHERE page = '$page' ";
    }
}