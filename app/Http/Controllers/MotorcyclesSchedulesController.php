<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class MotorcyclesSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index() {
        return Inertia::render('Schedule/ScheduleList', [
            'max_motocycles' => config('app.max_motorcycles')
        ]);
    }
}
