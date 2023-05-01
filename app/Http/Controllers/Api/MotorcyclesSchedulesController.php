<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MotorcyclesSchedules;

class MotorcyclesSchedulesController extends Controller
{

    /**
     * Get the schedules.
     */
    public function getSchdules()
    {
        return response()->json([
            'schedule' => MotorcyclesSchedules::all()
        ]);
    }

    public function getSchdule($schedule_id)
    {
        return response()->json([
            'schedule' => MotorcyclesSchedules::find($schedule_id)
        ]);
    }

    public function addMotocycle($schedule_id)
    {
        $schedule = MotorcyclesSchedules::findOrFail($schedule_id);
        if ($schedule->counter_motorcycle < config('app.max_motorcycles')) {
            $schedule->counter_motorcycle = $schedule->counter_motorcycle+1;
            $schedule->save();
        }

        return response()->json([
            'schedule' => $schedule
        ]);
    }

    public function restMotocycle($schedule_id)
    {
        $schedule = MotorcyclesSchedules::findOrFail($schedule_id);
        if ($schedule->counter_motorcycle > 0) {
            $schedule->counter_motorcycle = $schedule->counter_motorcycle-1;
            $schedule->save();
        }

        return response()->json([
            'schedule' => $schedule
        ]);   
    }
}
