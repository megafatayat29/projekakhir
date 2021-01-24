<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PatientModel {
    public static function get_all(){
        $patient = DB::table('patients')->get();
        return $patient;
    }
}