<?php

namespace App\Http\Controllers;

use App\Models\Doctor;


class PagesController extends Controller
{
    public function main($lang = null){
        if ($lang === 'ru'){
            return view('ru.main');
        }else{
            return view('main');
        }
    }

    public function doctors($lang = null){
        if ($lang === 'ru'){
            return view('ru.doctors', ['doctors' => Doctor::all()]);
        }else{
            return view('doctors', ['doctors' => Doctor::all()]);
        }
    }

    public function contacts($lang = null){
        if ($lang === 'ru'){
            return view('ru.contacts');
        }else{
            return view('contacts');
        }
    }

    public function doctorInfo(Doctor $doctor, $lang = null){

        if ($lang === 'ru'){
            return view('ru.doctorInfo')->with(['doctor' => $doctor]);
        }else{
            return view('doctorInfo')->with(['doctor' => $doctor]);
        }
    }
}
