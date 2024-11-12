<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=> 'Mario',
                'apellido' => 'Bernal Barrón',
                'correo' => 'mariobernal10ba@gmail.com',
                'telefono' => '4411519805'
            ], 
            [
                'nombre'=> 'Gerson',
                'apellido' => 'Pastrana',
                'correo' => 'gerson@gmail.com',
                'telefono' => '4411519806'
            ], 
            [
                'nombre'=> 'Gelipe',
                'apellido' => 'Arriaaga',
                'correo' => 'Gelipe@gmail.com',
                'telefono' => '4411519807'
            ]]);
    }
}
