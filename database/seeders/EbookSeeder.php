<?php

namespace Database\Seeders;

use App\Models\Ebook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ebook::create([
            'id' => 1,
            'title' => 'The Hunger Games',
            'author' => 'Suzanne Collins',
            'description' => 'The Hunger Games film series is composed of science fiction dystopian adventure films, based on The Hunger Games trilogy of novels by the American author Suzanne Collins. The movies are distributed by Lionsgate and produced by Nina Jacobson and Jon Kilik.'
        ]);

        Ebook::create([
            'id' => 2,
            'title' => 'Percy Jackson',
            'author' => 'Rick Riordan',
            'description' => 'Percy Jackson & the Olympians is a pentalogy of fantasy novels written by American author Rick Riordan, and the first book series in the Camp Half-Blood Chronicles.'
        ]);

        Ebook::create([
            'id' => 3,
            'title' => 'The Maze Runner',
            'author' => 'James Dashner',
            'description' => 'The Maze Runner is a series of young adult dystopian science fiction novels written by American author James Dashner.'
        ]);

        Ebook::create([
            'id' => 4,
            'title' => 'Harry Potter and the Philoshopers Stone',
            'author' => 'J.K. Rowling',
            'description' => 'Harry Potter and the Philosophers Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter series and Rowlings debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school, and with the help of his friends, he faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harrys parents, but failed to kill Harry when he was just 15 months old.'
        ]);

        Ebook::create([
            'id' => 5,
            'title' => 'Divergent',
            'author' => 'Veronica Roth',
            'description' => 'Tris Prior (Shailene Woodley) lives in a futuristic world in which society is divided into five factions. As each person enters adulthood, he or she must choose a faction and commit to it for life. Tris chooses Dauntless -- those who pursue bravery above all else.'
        ]);
    }
}
