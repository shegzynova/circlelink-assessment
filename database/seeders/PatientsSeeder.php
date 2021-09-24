<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seed to seed 1000 patients
     *
     * @return void
     */
    public function run()
    {
        Patient::factory()
            ->count(1000)
            ->create();
    }
}
