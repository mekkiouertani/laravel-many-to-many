<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{

    public function run(): void
    {
        $technologies = ['HTML', 'Javascript', 'CSS', 'SCSS', 'PHP', 'Laravel', 'Vue'];
        foreach ($technologies as $item) {
            $newItem = new Technology();
            $newItem->name = $item;
            $newItem->slug = Str::slug($item, '-');
            $newItem->save();
        }
    }
}
