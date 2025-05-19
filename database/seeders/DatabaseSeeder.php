<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'about_title' => 'Laravel Developer',
            'about_description' => 'Results-driven software developer with over 1 year of specialized experience in PHP and Laravel framework development. Proficient in creating efficient, scalable web applications with clean, maintainable code. Skilled in RESTful API development, database .',
            'fb_url' => '#li',
            'github_url' => 'https://github.com/ayshafa',
            'linkedin_url' => 'https://www.linkedin.com/in/ayisha-kk-2a3913261/',
            'freelance_url' => '#li',
            'cv_url' => '#cv',
            'video_url' => '#video'
        ]);
        // \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ayisha kk',
            'email' => 'ayishakk516@gmail.com',
        ]);
    }
}
