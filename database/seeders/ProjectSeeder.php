<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dierens')->insert([
            'titel'         => 'Mijn project titel',
            'description'   => 'Enim labore eu, sed. Sed esse incididunt aute velit. Incididunt, aute velit duis amet sint. Duis amet sint pariatur esse anim officia mollit. Sint pariatur esse anim. Esse anim officia mollit laboris aliqua, et esse.',
            'active'        => true,
        ]);
    }
}

