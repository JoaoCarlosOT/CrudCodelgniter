<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class dados extends Seeder
{
    public function run()
    {
      
        for($i = 0; $i <= 25; $i++){
            
            $data = [
                'title' => 'programação',
                'description'    => 'llllllllllllllllllllllllllllll',
            ];

            $this->db->table('posts')->insert($data);
        }
    }
}
