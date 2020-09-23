<?php

use Illuminate\Database\Seeder;
use App\Tea;

class TeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tea::truncate();
        factory(App\Tea::class, 50)->create();
    }
}
