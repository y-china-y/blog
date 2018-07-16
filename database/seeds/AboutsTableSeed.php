<?php

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = app(Faker\Generator::class)->dateTimeThisYear();

        $about = new About();
        $about->content = '# Hello World! I\'m Jochen.</h1>';
        $about->created_at = $time;
        $about->updated_at = $time;
        $about->save();
    }
}