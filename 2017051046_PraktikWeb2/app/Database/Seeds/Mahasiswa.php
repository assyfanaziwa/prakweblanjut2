<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
            'npm' => 'darth',
            'nama' => 'darth@theempire.com',
            'alamat' => 'kalianda',
            'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051046',
                'nama' => 'Assyfa Naziwa Ganandy',
                'alamat' => 'Sukarame',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '201705180',
                'nama' => 'Albatrisya Kala',
                'alamat' => 'Bandar Lampung',
                'created_at' => Time::now(),
            ],
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach($data_mahasiswa as $data){
            $this->db->table('mahasiswa')->insert($data);
        }
       
    }
}
