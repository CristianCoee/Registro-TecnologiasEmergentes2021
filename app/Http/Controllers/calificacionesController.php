<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calificaciones;

class calificacionesController extends Controller

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
            $data['calificaciones']=Calificaciones::paginate(15);
            return view('calificaciones.index', $data);
            /*$calificaciones = calificaciones::all();
            return view('calificaciones.index', $calificaciones);*/
    
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('calificaciones.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            
        
            $datacalificaciones = $request->except('_token','saveitem');
            Calificaciones::insert($datacalificaciones);
            //return response()->json($datacalificaciones);
            return redirect('calificaciones/');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Calificaciones  $calificaciones
         * @return \Illuminate\Http\Response
         */
        public function show(Calificaciones $calificaciones)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Calificaciones  $alumnos
         * @return \Illuminate\Http\Response
         */
        /*public function edit(Calificaciones $calificaciones)
        {
            //
            return view('calificaciones.edit');
        }*/
        public function edit($id) {
            $calificaciones = Calificaciones::findOrFail($id);
            return view('calificaciones.edit', compact('calificaciones'));
         }
    
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Calificaciones  $calificaciones
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id){
    
            $calificaciones = Calificaciones::findOrFail($id);
            $calificaciones->update($request->all());
            return redirect('calificaciones');
        }
        /*public function update(Request $request, Calificaciones $calificaciones)
        {
            //
        }*/
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Calificaciones $calificaciones
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
            Calificaciones::destroy($id);
            return redirect('calificaciones');
        }
    }
