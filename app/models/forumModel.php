<?php
require_once(__DIR__.'/../../core/db_model.php');

class forumModel extends db_model{

    function insertForum($post){
		return $this->create('forum_post', $post);


    }
}

?>