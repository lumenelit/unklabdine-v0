<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {

        $quote = [
            ['quote' => 'Eat well to feel healthy'],
            ['quote' => 'Eat to live, not live to eat'],
            ['quote' => 'You are what you eat'],
            ['quote' => 'Healthy food for a healthy mood'],
            ['quote' => 'Say yes to tummy'],
            ['quote' => 'Spend less, eat best'],
            ['quote' => 'Creativity is always on our menu'],
            ['quote' => 'Taste the difference'],
            ['quote' => 'Good food. Good mood.'],
            ['quote' => 'Food that makes you say wow'],
            ['quote' => 'Hundreds of flavors under one roof'],
            ['quote' => 'Connected. Organic. Alive'],
            ['quote' => 'Your daily happiness'],
            ['quote' => 'Vegetarians live longer to love longer'],
            ['quote' => 'Love at first bite'],
            ['quote' => 'Nothing brings people together like good food'],
            ['quote' => 'JUST EAT IT'],
            ['quote' => 'Education is the most powerful weapon you can use to change the world'],
            ['quote' => 'Good food starts with good products'],
            ['quote' => "It's great to get together and have a good meal at least once a day"],
            ['quote' => 'U Dine brings people together on all levels'],
            ['quote' => 'The fear of the LORD is the beginning of wisdom, and knowledge of the Holy One is understanding'],
            ['quote' => 'A good education is a foundation for a better future'],
            ['quote' => 'If you get tired, learn to rest, not to quit!'],
            ['quote' => 'Knowledge is the key to success in life'],
            ['quote' => 'Keep on loving one another as brothers and sisters. Hebrew 13:1'],
            ['quote' => 'Be joyful always. 1 thes 5:16'],
            ['quote' => "DON'T STOP UNTIL YOU'RE PROUD"],
            ['quote' => "A bad semester or one bad grade won't define your future"],
            ['quote' => "Set your goals high and don't stop till you get there!"],
            ['quote' => 'TRYING now is better than CRYING later'],
            ['quote' => 'Study hard and work hard. cause all the late nights and early mornings will pay off'],
            ['quote' => 'The best way to predict your future is to create it'],
            ['quote' => 'You only stop learning when you quit'],
            ['quote' => "Hard work beats talent when talent doesn't work hard"],
            ['quote' => 'Forget the failures, keep the lesson'],
            ['quote' => '7 Billion Smiles, And Mine Is My Favorite'],
            ['quote' => 'Hangout with people who force you to level up'],
            ['quote' => 'The bad days are only temporary'],
            ['quote' => 'Begin your day with gratitude'],
            ['quote' => 'Enjoy it before it becomes memory'],
            ['quote' => 'Some friends make your days even better'],
            ['quote' => 'There is no greater gift than friendship'],
            ['quote' => "Today's special moments are tomorrow's memories"],

         ];
        
        foreach ($quote as $value) {
            DB::table('quotes')->insert([
                'quote' => $value['quote'],
            ]);
        }
    }
}
