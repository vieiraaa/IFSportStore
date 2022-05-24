<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nome'=>'Calçados'
        ]);
        DB::table('categorias')->insert([
            'nome'=>'Roupas'
        ]);
        DB::table('categorias')->insert([
            'nome'=>'Acessórios'
        ]);
        DB::table('categorias')->insert([
            'nome'=>'Marcas'
        ]);
        DB::table('categorias')->insert([
            'nome'=>'Esporte'
        ]);
    }
}
