<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Docente;
use App\Egresado;
use App\Generacion;
use App\Vinculacion;

class InicioController extends Controller
{

    public function index()
    {
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $vinculaciones = $this->Vinculacion();


        return view('inicio', compact(
            'alumnos', 'docentes', 'generaciones',  'vinculaciones'));
    }

    public function ProcesoAdministrativo()
    {
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $vinculaciones = $this->Vinculacion();

        return view('estaticas/procesoAdministrativo', compact(
            'alumnos', 'docentes', 'generaciones', 'vinculaciones'));
    }

    public function PlanEstudios()
    {
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $vinculaciones = $this->Vinculacion();

        return view('estaticas/PlanEstudios', compact(
            'alumnos', 'docentes', 'generaciones', 'vinculaciones'));
    }

    public function PosgradoMI()
    {
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $vinculaciones = $this->Vinculacion();

        return view('estaticas/PosgradoMI', compact(
            'alumnos', 'docentes', 'generaciones', 'vinculaciones'));
    }

    public function AlumnosGeneraciones($id){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $vinculaciones = $this->Vinculacion();

        $AlumnosGeneraciones  = Alumno::all()->where('idgeneracion', $id);
        $generacion = Generacion::find($id);

        return view('FrondEnd.alumnos.alumnosGeneraciones', compact('AlumnosGeneraciones','generacion',
            'alumnos', 'docentes', 'generaciones', 'vinculaciones'));
    }

    public function Alumnos(){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $vinculaciones = $this->Vinculacion();

        return view('FrondEnd.alumnos.AllAlumnos', compact(
            'alumnos', 'docentes', 'generaciones', 'vinculaciones'));
    }

    public function PerfilDocente($id){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $vinculaciones = $this->Vinculacion();

        $docente = Docente::find($id);

        return view('FrondEnd.docente.perfil', compact('docente',
            'alumnos', 'docentes', 'generaciones', 'vinculaciones'));
    }
    public function AllDocente(){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $vinculaciones = $this->Vinculacion();



        return view('FrondEnd.docente.AllDocentes', compact(
            'alumnos', 'docentes', 'generaciones', 'vinculaciones'));
    }
    public function AllVinculacion(){
        $alumnos = $this->Alumno();
        $docentes = $this->Docente();
        $generaciones = $this->Generacion();
        $vinculaciones = $this->Vinculacion();



        return view('FrondEnd.vinculaciones.AllVinculaciones', compact(
            'alumnos', 'docentes', 'generaciones', 'vinculaciones'));
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
