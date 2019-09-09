<?php
    class Comment extends Eloquent {
        function post(){
            return $this->belongsTo('Post');
        }
        
        function user(){
            return $this->belongsTo('User');
        }
    }
?>