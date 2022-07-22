<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Option::create([
            'option_name' => Option::siteurl,
            'option_value' => "www.site-domain.com",
            'autoload' => "yes"
        ]);

        Option::create([
            'option_name' => Option::home,
            'option_value' => "www.site-domain.com",
            'autoload' => "yes"
        ]);

        Option::create([
            'option_name' => Option::blogname,
            'option_value' => "Blog Name",
            'autoload' => "yes"
        ]);

        Option::create([
            'option_name' => Option::blogdescription,
            'option_value' => "Blog Description",
            'autoload' => "yes"
        ]);
    }
}
