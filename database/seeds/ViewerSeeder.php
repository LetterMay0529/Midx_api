<?php

use Illuminate\Database\Seeder;

class ViewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Viewer::class, 20)->create();
    }
}
