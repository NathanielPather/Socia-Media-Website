<?php
    class Userfriend extends Eloquent {
        
        function userfriends(){
            return $this->belongsToMany('User');
        }
    }
?>