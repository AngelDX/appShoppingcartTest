<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        //Super admin
        $user=User::create([
            'name'=>'Angel Rosendo Condori Coaquira',
            'email'=>'angel.condori@gmail.com',
            'password'=>bcrypt('12345678'),
            'document'=>'40728626',
            'cellphone'=>'950062125',
            'address'=>'Jr. Huancas 370'
        ]);

        $user->assignRole('Administrador');
        $users=User::factory(5)->create();
        foreach ($users as $user) {
            $user->assignRole('Cliente');
        }
    }
}
