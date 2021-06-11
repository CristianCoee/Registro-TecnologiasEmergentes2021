<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profesores;

class profesoresController extends Controller

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
            $data['profesores']=Profesores::paginate(15);
            return view('profesores.index', $data);
            /*$profesores = Profesores::all();
            return view('profesores.index', $profesores);*/
    
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('profesores.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            /*

         $validatedData = $request->validate([
                
                'nombre' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'apellido' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'tel' => 'required|numeric',
                'sexo' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'cell' => 'required|numeric',
                'usuario' => 'required',
                'clave' => 'required',
                'activo' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                
            ]);*/


            $dataprofesores = $request->except('_token','saveitem');
            Profesores::insert($dataprofesores);
            //return response()->json($dataprofesores);
            return redirect('profesores/');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Profesores  $profesores
         * @return \Illuminate\Http\Response
         */
        public function show(Profesores $profesores)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Profesores  $profesores
         * @return \Illuminate\Http\Response
         */
        /*public function edit(Profesores $profesores)
        {
            //
            return view('profesores.edit');
        }*/
        public function edit($id) {
            $profesores = Profesores::findOrFail($id);
            return view('profesores.edit', compact('profesores'));
         }
    
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Profesores  $profesores
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id){
    
            $profesores = Profesores::findOrFail($id);
            $profesores->update($request->all());
            return redirect('profesores');
        }
        /*public function update(Request $request, Profesores $profesores)
        {
            //
        }*/
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Profesores $profesores
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
            Profesores::destroy($id);
            return redirect('profesores');
        }
    }
