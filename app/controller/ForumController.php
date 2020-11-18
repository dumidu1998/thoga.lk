<?php

require_once(__DIR__.'/../models/item.php');
require_once(__DIR__.'/../../core/View.php');
require_once(__DIR__.'/../models/forumModel.php');



class ForumController{

    function __construct()
    {
        $this->model = new item();
        $this->forum = new forumModel();
    }

    public function forum(){
        session_start();
        $view = new View("forum/forum");
    }

    public function postForum(){
        session_start();
        $_SESSION['user']=array("user_type"=>"1");
        print_r($_SESSION['user']);
        if(isset($_POST['post_forum'])){
            $title= $_POST['topic'];
            $description = $_POST['description'];
        
            foreach($_SESSION['user'] as $keys => $values){
            echo $values['user_type'];
            $forum_array = array('post' => $title , 'description' => $description, 'category' => $values['user_type']);
            }
            $result = $this->forum->insertForum($forum_array);
            print_r($forum_array);
            header("location: forum");

            
        }
    }

    public function viewfull(){
        $view = new View("forum/forumq");
        
    }

}