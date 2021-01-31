<?php

namespace Database\Seeders;

use App\Models\Codescondition;
use Illuminate\Database\Seeder;

class CodesConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $codes=[
            'Tormenta tropical',
            'Huracán',
			'Tormentas eléctricas severas',
			'Tormentas',
			'Lluvia y nieve mezcladas',
			'Lluvia mezclada y aguanieve',
			'Mezcla de nieve y aguanieve',
			'Llovizna helada',
			'Llovizna',
			'Lluvia helada',
			'Duchas',
			'Lluvia',
			'Copos de nieve',
			'Duchas de nieve liviana',
			'La nieve que sopla',
			'Nieve',
			'Granizo',
			'Aguanieve',
			'Polvo',
			'Brumoso',
			'Calina',
			'Ahumado',
			'Tempestuoso',
			'Ventoso',
			'Frío',
			'Nublado',
			'Mayormente nublado (Noche)',
			'Mayormente nublado (Día)',
			'Parcialmente nublado (Noche)',
			'Parcialmente nublado (Día)',
			'Noche clara',
			'Soleado',
			'Justo (Noche)',
			'Justo (Día)',
			'Mezcla de lluvia y granizo',
			'Caliente',
			'Tormentas aisladas',
			'Tormentas eléctricas dispersas',
			'Chubascos dispersos (Día)',
			'Lluvia Pesada',
			'Chubascos de nieve dispersos (Día)',
			'Fuertes nevadas',
			'Tormenta de nieve',
			'No disponible',
			'Lluvias dispersas (Noche)',
			'Chubascos de nieve dispersos (Noche)',
			'Chubascos dispersos',
			
			
        ];
        
        foreach ($codes as $code) {
            # code...

            Codescondition::create([
                    'descripcion'=>$code
                ]);
        }
    }
}
