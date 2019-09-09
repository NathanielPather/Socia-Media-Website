<?php
    class CommentSeeder extends Seeder {
        public function run()
        {
            $comment = new Comment;
            $comment->message = "Hi, I'm Sophie, and this is my first comment!";
            $comment->post_id = '1';
            $comment->user_id = '8';
            $comment->save();
            
            $comment = new Comment;
            $comment->message = "Hi, I'm Sophie, and this is my second comment!";
            $comment->post_id = '1';
            $comment->user_id = '8';
            $comment->save();
            
            $comment = new Comment;
            $comment->message = "Hi, I'm Sophie, and this is my third comment!";
            $comment->post_id = '1';
            $comment->user_id = '8';
            $comment->save();
            
            $comment = new Comment;
            $comment->message = "Hi, I'm Sophie, and this is my fourth comment!";
            $comment->post_id = '1';
            $comment->user_id = '8';
            $comment->save();
            
            $comment = new Comment;
            $comment->message = "Hi, I'm Sophie, and this is my fifth comment!";
            $comment->post_id = '1';
            $comment->user_id = '8';
            $comment->save();
            
            $comment = new Comment;
            $comment->message = "Hi, I'm Sophie, and this is my sixth comment!";
            $comment->post_id = '1';
            $comment->user_id = '8';
            $comment->save();
            
            $comment = new Comment;
            $comment->message = "Hi, I'm Sophie, and this is my seventh comment!";
            $comment->post_id = '1';
            $comment->user_id = '8';
            $comment->save();
            
            $comment = new Comment;
            $comment->message = "Hi, I'm Sophie, and this is my eigth comment!";
            $comment->post_id = '1';
            $comment->user_id = '8';
            $comment->save();
            
            $comment = new Comment;
            $comment->message = "Hi, I'm Sophie, and this is my ninth comment!";
            $comment->post_id = '1';
            $comment->user_id = '8';
            $comment->save();
            
            $comment = new Comment;
            $comment->message = "Hi, I'm Sophie, and this is my tenth comment!";
            $comment->post_id = '1';
            $comment->user_id = '8';
            $comment->save();
        }
    }
?>