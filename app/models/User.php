<?php
    class User extends Eloquent {
        function posts(){
            return $this->hasMany('Post');
        }
        
        function comments(){
            return $this->hasMany('Comment');
        }
        
        function friends(){
            return $this->belongstoMany('Userfriend');
        }
    }
?>