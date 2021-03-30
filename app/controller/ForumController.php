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
        $all;
        if(isset($_GET['search'])){
            $all=$this->forum->getposgetpostswithtopreplywithkey($_GET['search']);
        }else{
            $all=$this->forum->getpostswithtopreply();

        }
        if(isset($_GET['added'])&&$_GET['added']==1){
            $sucess=1;
        }
        $view = new View("forum/forum");
        $view->assign('data',$all);
        if(isset($sucess)){
            $view->assign('sucess',$sucess);
        }
    }

    public function postForum(){
        session_start();
        // $_SESSION['user']=array("user_type"=>"1");
        if(isset($_POST['post_forum'])){
            $title= $_POST['topic'];
            $description = $_POST['description'];
        
            foreach($_SESSION['user'] as $keys => $values){
            $forum_array = array('user_id'=>$values['user_id'],'title' => $title , 'description' => $description, 'category' => $values['user_type']);
            }
            $result = $this->forum->insertForum($forum_array);
            header("location: /thoga.lk/forum?added=1");
        }
    }

    public function viewfull(){
        $post_id=$_GET['post_id'];
        $question = $this->forum->getpostandauthor($post_id);
        $replies = $this->forum->getreplyandauthor($post_id);
        $count = $this->forum->getcountofreplies($post_id);
        $view = new View("forum/forumq");
        $view->assign('post_id',$post_id);
        $view->assign('question',$question);
        $view->assign('replies',$replies);
        $view->assign('count',$count);
    }

    public function addreply(){
        session_start();
        if(isset($_POST['reply'])&&isset($_SESSION['user'])){
            $reply=array('user_id'=>$_SESSION['user'][0]['user_id'],'reply'=>$_POST['reply'],'vote'=>0,'post_id'=>$_POST['post_id']);
            $output=$this->forum->addreply($reply);
            print_r($reply);
            if($output){
                header("location: /thoga.lk/forum/fullview?post_id=".$_POST['post_id']."&added=1");
            }else{
                header("location: /thoga.lk/forum/fullview?post_id=".$_POST['post_id']."&added=0");
            }
        }
    }

    public function unlikep(){
        $post_id=$_GET['id'];
        $target='forum_post';
        $result=$this->forum->remvote($target,$post_id);
        header("location: /thoga.lk/forum/fullview?post_id=".$post_id);

    }
    
    public function likep(){
        $post_id=$_GET['id'];
        $target='forum_post';
        $result=$this->forum->addlike($target,$post_id);
        header("location: /thoga.lk/forum/fullview?post_id=".$post_id);
        
        
    }
    
    public function liker(){
        $pid=$_GET['pid'];
        $post_id=$_GET['id'];
        $target='forum_replies';
        $result=$this->forum->addlike($target,$post_id);
        header("location: /thoga.lk/forum/fullview?post_id=".$pid);
        
    }
    
    public function unliker(){
        $pid=$_GET['pid'];
        $post_id=$_GET['id'];
        $target='forum_replies';
        $result=$this->forum->remvote($target,$post_id);
        header("location: /thoga.lk/forum/fullview?post_id=".$pid);

    }



}