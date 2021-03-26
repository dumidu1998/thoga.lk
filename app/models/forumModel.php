<?php
require_once(__DIR__.'/../../core/db_model.php');

class forumModel extends db_model{

    function insertForum($post){
		return $this->create('forum_post', $post);
    }

    function getpostswithtopreply(){
      return $this->join2tables(array('a.*','b.firstname','b.lastname','(SELECT d.reply FROM forum_replies AS d INNER JOIN user as u ON d.user_id=u.user_id WHERE a.post_id = d.post_id ORDER BY vote DESC LIMIT 1 ) as reply'),'forum_post as a','user as b','a.user_id=b.user_id order by `date/time` DESC',null);
    }

    function getpostandauthor($id){
      return $this->join2tables(array('user.firstname','user.lastname', 'forum_post.*'),'forum_post','user','user.user_id=forum_post.user_id',array('post_id'=>$id));
    }
    
    function getreplyandauthor($id){
      return $this->join2tables(array('user.firstname','user.lastname', 'forum_replies.*'),'forum_replies','user','user.user_id=forum_replies.user_id',array('post_id'=>$id));
    }

    function getcountofreplies($id){
      return $this->countrows('SELECT * FROM forum_replies inner join user on forum_replies.user_id=user.user_id WHERE post_id='.$id);
    }
    
    function addreply($replyarray){
		  return $this->create('forum_replies', $replyarray);
    }
}

?>