<?php

namespace App\Http\Controllers\Admin;

use App\Alumno;
use App\Docente;
use App\Egresado;
use App\Generacion;
use App\Vinculacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $vinculaciones = $this->Vinculacion();
        return view('admin.index', compact(
            'alumnos', 'docentes', 'generaciones', 'vinculaciones' ));
    }

    protected function Alumno()
    {
        return Alumno::all();
    }

    protected function Docente()
    {
        return Docente::all();
    }



    protected function Generacion()
    {
        return Generacion::all();
    }



    protected function Vinculacion()
    {
        return Vinculacion::all();
    }


}
