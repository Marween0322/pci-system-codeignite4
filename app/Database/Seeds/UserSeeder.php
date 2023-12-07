<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {

        $sampleData = [];

        // Generate 10 sample entries
        for ($i = 0; $i < 10; $i++) {
            $sampleData[] = [
                'title' => 'Book Title ' . ($i + 1),
                'author' => 'Author Name ' . ($i + 1),
                'year' => rand(2000, 2023), // Assuming the year range you want
            ];
        }


        //
        $data = [
            [
                'title' => 'CodeIgniter 3 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],
            [
                'title' => 'CodeIgniter 4 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],

            [
                'title' => 'CodeIgniter 5 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],

            [
                'title' => 'CodeIgniter 6 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],

            [
                'title' => 'CodeIgniter 7 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],


        ];

        $this->db->table('tblBooks')->insertBatch($sampleData);
    }
}
