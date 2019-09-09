<?php
    class UserfriendSeeder extends Seeder {
        public function run()
        {
            $userfriend = new Userfriend;
            $userfriend->user_id = '2';
            $userfriend->friend_id = '1';
            $userfriend->save();
        }
    }
?>