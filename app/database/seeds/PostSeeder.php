<?php
    class PostSeeder extends Seeder {
        public function run()
        {
            $post = new Post;
            $post->title = "John's First Post!";
            $post->message = 'Hi guys, my name is John, and this is my first post!';
            $post->privacy = 'public';
            $post->user_id = '2';
            $post->save();
            
            $post = new Post;
            $post->title = "John's Second Post!";
            $post->message = 'Hi guys, my name is John, and this is my second post!';
            $post->privacy = 'public';
            $post->user_id = '2';
            $post->save();
            
            $post = new Post;
            $post->title = "John's Third Post!";
            $post->message = 'Hi guys, my name is John, and this is my third post!';
            $post->privacy = 'public';
            $post->user_id = '2';
            $post->save();
            
            $post = new Post;
            $post->title = "John's Fourth Post!";
            $post->message = 'Hi guys, my name is John, and this is my fourth post!';
            $post->privacy = 'public';
            $post->user_id = '2';
            $post->save();
            
            $post = new Post;
            $post->title = "John's Fifth Post!";
            $post->message = 'Hi guys, my name is John, and this is my fifth post!';
            $post->privacy = 'public';
            $post->user_id = '2';
            $post->save();
            
            $post = new Post;
            $post->title = "John's Sixth Post!";
            $post->message = 'Hi guys, my name is John, and this is my sixth post!';
            $post->privacy = 'public';
            $post->user_id = '2';
            $post->save();
            
            $post = new Post;
            $post->title = "John's Seventh Post!";
            $post->message = 'Hi guys, my name is John, and this is my seventh post!';
            $post->privacy = 'public';
            $post->user_id = '2';
            $post->save();
            
            $post = new Post;
            $post->title = "John's Eighth Post!";
            $post->message = 'Hi guys, my name is John, and this is my eigth post!';
            $post->privacy = 'public';
            $post->user_id = '2';
            $post->save();
            
            $post = new Post;
            $post->title = "John's Ninth Post!";
            $post->message = 'Hi guys, my name is John, and this is my ninth post!';
            $post->privacy = 'public';
            $post->user_id = '2';
            $post->save();
            
            $post = new Post;
            $post->title = "John's Tenth Post!";
            $post->message = 'Hi guys, my name is John, and this is my tenth post!';
            $post->privacy = 'public';
            $post->user_id = '2';
            $post->save();
            
            $post = new Post;
            $post->title = "Bob's Post 1";
            $post->message = "Bob's pubic post";
            $post->privacy = 'public';
            $post->user_id = '1';
            $post->save();
            
            $post = new Post;
            $post->title = "Bob's Post 2";
            $post->message = "Bob's friends post";
            $post->privacy = 'friends';
            $post->user_id = '1';
            $post->save();
            
            $post = new Post;
            $post->title = "Bob's Post 3";
            $post->message = "Bob's private post";
            $post->privacy = 'private';
            $post->user_id = '1';
            $post->save();
        }
    }
?>