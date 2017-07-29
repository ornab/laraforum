<?php

use Illuminate\Database\Seeder;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $channel1 = ['title' => 'Laravel'];
        $channel2 = ['title' => 'Javascript'];
        $channel3 = ['title' => 'Vuejs'];
        $channel4 = ['title' => 'CSS3'];
        $channel5 = ['title' => 'HTML5'];
        $channel6 = ['title' => 'PHP Testing'];
        $channel7 = ['title' => 'Spark'];
        $channel8 = ['title' => 'Lumen'];
         

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
        Channel::create($channel6);
        Channel::create($channel7);
        Channel::create($channel8);

    }
}
