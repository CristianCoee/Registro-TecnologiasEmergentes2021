<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;

class AlumnoController extends Controller

    {
        public function __construct(){
            $this->middleware('auth');
        }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            $data['alumnos']=Alumnos::paginate(15);
            return view('Alumnos.index', $data);
            /*$alumnos = Alumnos::all();
            return view('alumnos.index', $alumnos);*/
    
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('Alumnos.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //

        /*    $validatedData = $request->validate([
                'NIE' => 'required',
                'nombrealum' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'apellidoalum' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'telefonoalum' => 'required|numeric',
                'sexo' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
               
                'direccion' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'responsable' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'curso' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'estado' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
            ]);*/


            $dataalumnos = $request->except('_token','saveitem');
            Alumnos::insert($dataalumnos);
            //return response()->json($dataProducts);
            return redirect('alumnos/');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Alumnos  $alumnos
         * @return \Illuminate\Http\Response
         */
        public function show(Alumnos $alumnos)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Alumnos  $alumnos
         * @return \Illuminate\Http\Response
         */
        /*public function edit(Alumnos $alumnos)
        {
            //
            return view('alumnos.edit');
        }*/
        public function edit($id) {
            $alumnos = Alumnos::findOrFail($id);
            return view('Alumnos.edit', compact('alumnos'));
         }
    
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Alumnos  $alumnos
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id){
    
            $alumnos = Alumnos::findOrFail($id);
            $alumnos->update($request->all());
            return redirect('alumnos');
        }
        /*public function update(Request $request, Alumnos $alumnos)
        {
            //
        }*/
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Alumnos $alumnos
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
            Alumnos::destroy($id);
            return redirect('alumnos');
        }
    }
