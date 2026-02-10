<?php

namespace Database\Seeders;

use App\Models\QuitJob;
use Illuminate\Database\Seeder;

class QuitJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuitJob::factory(200)->create();
    }
}
