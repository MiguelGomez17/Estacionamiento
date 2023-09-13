<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Tipo = new Tipo();
        $Tipo->tipo = 'Oficial';
        $Tipo->monto = 0;
        $Tipo->save();

        $Tipo = new Tipo();
        $Tipo->tipo = 'Residente';
        $Tipo->monto = 1;
        $Tipo->save();

        $Tipo = new Tipo();
        $Tipo->tipo = 'No Residente';
        $Tipo->monto = 3;
        $Tipo->save();
    }
}
