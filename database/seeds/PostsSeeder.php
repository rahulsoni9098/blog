<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  1
        $post = new Post();
        $post->title        = "helo from finance ";
        $post->body         = "According to Harlan Landes, founder of The Plutus Awards, “It’s been really interesting to see how the community of bloggers and podcasters has changed. Many blogs and podcasts have become a lot more sophisticated and marketable.” He adds, “People are a lot more concerned with building their businesses and brands, more so than 10 years ago.”";
        $post->slug         = "finance_1";
        $post->category_id  = 1;
        $post->save();
        
        //  2
        $post = new Post();
        $post->title        = "laravel";
        $post->body         = "Laravel’s Str class doesn’t have a method for converting markdown to HTML out of the box; however, you can easily add the functionality as a macro in your application.";
        $post->slug         = "laravel_1";
        $post->category_id  = 2;
        $post->save();
        
        //  3
        $post = new Post();
        $post->title        = "politics";
        $post->body         = "Facebook is accountable for many sins of omission and commission, and whether buying WhatsApp to pre-empt competition is one of them is being determined by a judicial process in the US. Compared to these, WhatsApp’s…";
        $post->slug         = "politics_1";
        $post->category_id  = 3;
        $post->save();

        //  1
        $post = new Post();
        $post->title        = "helo from ss finance ";
        $post->body         = "According to Harlan Landes, founder of The Plutus Awards, “It’s been really interesting to see how the community of bloggers and podcasters has changed. Many blogs and podcasts have become a lot more sophisticated and marketable.” He adds, “People are a lot more concerned with building their businesses and brands, more so than 10 years ago.”";
        $post->slug         = "finance_2";
        $post->category_id  = 1;
        $post->save();
        
        //  2
        $post = new Post();
        $post->title        = "laravelss";
        $post->body         = "Laravel’s Str class doesn’t have a method for converting markdown to HTML out of the box; however, you can easily add the functionality as a macro in your application.";
        $post->slug         = "laravel_2";
        $post->category_id  = 2;
        $post->save();
        
        //  3
        $post = new Post();
        $post->title        = "politics ss";
        $post->body         = "Facebook is accountable for many sins of omission and commission, and whether buying WhatsApp to pre-empt competition is one of them is being determined by a judicial process in the US. Compared to these, WhatsApp’s…";
        $post->slug         = "politics_2";
        $post->category_id  = 3;
        $post->save();

        //  1
        $post = new Post();
        $post->title        = "helo sds from finance ";
        $post->body         = "According to Harlan Landes, founder of The Plutus Awards, “It’s been really interesting to see how the community of bloggers and podcasters has changed. Many blogs and podcasts have become a lot more sophisticated and marketable.” He adds, “People are a lot more concerned with building their businesses and brands, more so than 10 years ago.”";
        $post->slug         = "finance_3";
        $post->category_id  = 1;
        $post->save();
        
        //  2
        $post = new Post();
        $post->title        = "laravel jjj";
        $post->body         = "Laravel’s Str class doesn’t have a method for converting markdown to HTML out of the box; however, you can easily add the functionality as a macro in your application.";
        $post->slug         = "laravel_3";
        $post->category_id  = 2;
        $post->save();
        
        //  3
        $post = new Post();
        $post->title        = "politics jhh";
        $post->body         = "Facebook is accountable for many sins of omission and commission, and whether buying WhatsApp to pre-empt competition is one of them is being determined by a judicial process in the US. Compared to these, WhatsApp’s…";
        $post->slug         = "politics_3";
        $post->category_id  = 3;
        $post->save();

        //  1
        $post = new Post();
        $post->title        = "helo from nh finance ";
        $post->body         = "According to Harlan Landes, founder of The Plutus Awards, “It’s been really interesting to see how the community of bloggers and podcasters has changed. Many blogs and podcasts have become a lot more sophisticated and marketable.” He adds, “People are a lot more concerned with building their businesses and brands, more so than 10 years ago.”";
        $post->slug         = "finance_4";
        $post->category_id  = 1;
        $post->save();
        
        //  2
        $post = new Post();
        $post->title        = "laravel mkdsf";
        $post->body         = "Laravel’s Str class doesn’t have a method for converting markdown to HTML out of the box; however, you can easily add the functionality as a macro in your application.";
        $post->slug         = "laravel_4";
        $post->category_id  = 2;
        $post->save();
        
        //  3
        $post = new Post();
        $post->title        = "politicsdsfsdf";
        $post->body         = "Facebook is accountable for many sins of omission and commission, and whether buying WhatsApp to pre-empt competition is one of them is being determined by a judicial process in the US. Compared to these, WhatsApp’s…";
        $post->slug         = "politics_4";
        $post->category_id  = 3;
        $post->save();
        
    }
}
