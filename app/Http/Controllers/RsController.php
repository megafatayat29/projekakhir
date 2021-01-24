<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientModel;


class RsController extends Controller
{
    public function index(){
        $patient = PatientModel::get_all();
        return view('rs.index',compact('patient'));
    }
}
