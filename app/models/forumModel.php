<?php
require_once(__DIR__.'/../../core/db_model.php');

class forumModel extends db_model{

    function insertForum($post){
		return $this->create('forum_post', $post);
    }

    function getposts(){
      return $this->join2tables(array('a.*','b.firstname','b.lastname','(SELECT d.reply,u.firstname,u.lastname FROM forum_replies AS d INNER JOIN user as u ON d.user_id=u.user_id WHERE a.post_id = d.post_id ORDER BY date_time DESC LIMIT 1 ) as reply'),'forum_post as a','user as b','a.user_id=b.user_id',null);
    }
    
    function getpostsandtopreply(){
      return $this->join3tables(array('a.*','b.firstname','b.lastname'),'forum_post as a','user as b','a.user_id=b.user_id','forum_replies as c','a.post_id=(
        SELECT post_id
        FROM forum_replies AS d
        WHERE a.post_id = d.post_id
        ORDER BY date_time DESC
        LIMIT 1
    )',null);

    }
}

?>