<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        [
        	'title' => 'Facebook Already Spent $3.3 Million Lobbying this Year',
        	'description' => 'Facebook spent $3.3 million on lobbying in the United States during the first quarter of 2018, disclosures filed with the government Friday showed. ',
        	'image' => 'img1.jpg',
        	'featured' => false,
        	'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
    	[
    		'title' => '7 Free Online Tools to Rescue Your Photos Without Photoshop',
        	'description' => 'Whether you’re sharing photos on Instagram or working on an art project, the quality of the final image matters.',
        	'image' => 'img2.jpg',
        	'featured' => false,
        	'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	],
    	[
    		'title' => '3-Ingredient Happy Hour: A Blackberry Jam Bramble',
        	'description' => 'Happy weekend, and welcome back to 3-Ingredient Happy Hour, the weekly drink column featuring super simple yet delicious libations. I’m in Oxford this week, so I thought we’d make a streamlined version of the very British blackberry bramble.',
        	'image' => 'img3.jpg',
        	'featured' => false,
        	'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	],
    	[
    		'title' => 'How to Make Japanese Style Iced Coffee',
        	'description' => 'Nothing livens up a hot afternoon quite like a cup of iced coffee. Trouble is, a lot of the iced coffee out there is just stale, leftover hot brewed coffee that’s been chilled, or cold brewed coffee with a much different taste. ',
        	'image' => 'img4.jpg',
        	'featured' => false,
        	'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]
    	]);
    }
}
