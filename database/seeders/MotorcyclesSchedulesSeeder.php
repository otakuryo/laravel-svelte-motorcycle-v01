<?php

namespace Database\Seeders;

use App\Models\MotorcyclesSchedules;
use DateInterval;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorcyclesSchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horarios = array();

        // Fecha y hora de inicio
        $fecha_inicio = new DateTime('08:00');

        // Generar los horarios en tramos de 30 minutos
        while ($fecha_inicio <= new DateTime('21:00')) {
            $horarios[] = array(
                'date' => $fecha_inicio->format('Y-m-d H:i:s'),
                'counter_motorcycle' => 8,
            );
            $fecha_inicio->add(new DateInterval('PT30M'));
        }

        MotorcyclesSchedules::truncate();
        foreach ($horarios as $item) {
            MotorcyclesSchedules::create($item);
        }
    }
}
