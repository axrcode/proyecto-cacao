<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'nombre' => 'Colegio Blaise Pascal',
            'email' => 'info@cbp.edu.gt',
            'logo' => '',
            'website' => 'cbp.edu.gt',
            'direccion' => 'Mazatenango',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('empresas')->insert([
            'nombre' => 'Claro Guatemala',
            'email' => 'info@claro.com.gt',
            'logo' => '',
            'website' => 'claro.com.gt',
            'direccion' => 'Guatemala',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
