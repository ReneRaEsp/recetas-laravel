<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('categoria_receta')->insert([
      'nombre' => 'Comida Japonesa',
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categoria_receta')->insert([
      'nombre' => 'Comida Italiana',
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categoria_receta')->insert([
      'nombre' => 'Comida Austriaca',
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categoria_receta')->insert([
      'nombre' => 'Postres',
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categoria_receta')->insert([
      'nombre' => 'Desayunos',
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categoria_receta')->insert([
      'nombre' => 'Comida Tailandesa',
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s'),
    ]);
    DB::table('categoria_receta')->insert([
      'nombre' => 'Comida China',
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s'),
    ]);
  }
}
