<?php
    class Post extends Eloquent {
        function User(){
            return $this->belongsTo('User');
        }
        
        function comments(){
            return $this->hasMany('Comment');
        }
    }
?>