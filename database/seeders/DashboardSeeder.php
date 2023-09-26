<?php

namespace Database\Seeders;

use App\Models\dashboard;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dashboard::create([
            'herosubtitle' => 'Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.',
            'abouttitle' => 'Dr. Cahyo Budi Utomo, M.Pd',
            'abouttext' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, natus.',
            'aboutimage' => 'Gambar_About/about.jpg',
            'contacttitle' => 'Hubungi saya',
            'email' => 'Km2bP@example.com',
            'phone' => '08xxxxxxxxxx',
            'address' => 'Universitas Negeri Semarang',
        ]);
    }
}
