<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'category_id' => 1,
                'title' => 'Loki',
                'description' => 'The mercurial villain Loki resumes his role as the God of Mischief in a new series that takes place after the events of “Avengers: Endgame.”',
                'aktor' => 'Tom Hiddleston, Owen Wilson, Sophia Di Martino',
                'tahun' => '2021 - 2023',
                'sutradara' => 'Kate Herron',
                'image' => '/img/loki.png',
                'video_path' => '/videos/dummy.mp4',

            ],
            [
                'category_id' => 2,
                'title' => 'Chernobyl',
                'description' => 'In April 1986, the city of Chernobyl in the Soviet Union suffers one of the worst nuclear disasters in the history of mankind. Consequently, many heroes put their lives on the line in the following days, weeks and months.',
                'aktor' => 'Jared Harris, Stellan Skarsgård, Emily Watson',
                'tahun' => '2019',
                'sutradara' => 'Johan Renck',
                'image' => '/img/chernobyl.png',
                'video_path' => '/videos/dummy.mp4',
            ],
            [
                'category_id' => 3,
                'title' => 'Rick and Morty',
                'description' => 'The fractured domestic lives of a nihilistic mad scientist and his anxious grandson are further complicated by their inter-dimensional misadventures.',
                'aktor' => 'Chris Parnell, Spencer Grammer, Sarah Chalke',
                'tahun' => '2013',
                'sutradara' => '-',
                'image' => '/img/rick and morty.png',
                'video_path' => '/videos/dummy.mp4',
            ],
            [
                'category_id' => 1,
                'title' => 'The Crown',
                'description' => "Follows the political rivalries and romances of Queen Elizabeth II's reign and the events that shaped Britain for the second half of the 20th century.",
                'aktor' => 'Claire Foy, Olivia Colman, Imelda Staunton',
                'tahun' => '2016 - 2023',
                'sutradara' => '-',
                'image' => '/img/the crown.png',
                'video_path' => '/videos/dummy.mp4',
            ],
        ]);
    }
}
