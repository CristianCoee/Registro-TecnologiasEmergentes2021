<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materias;

class materiasController extends Controller

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
            $data['materias']=Materias::paginate(15);
            return view('materias.index', $data);
            /*$materias = Materias::all();
            return view('materias.index', $materias);*/
    
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('materias.create');
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

            
        
            $datamaterias = $request->except('_token','saveitem');
            Materias::insert($datamaterias);
            //return response()->json($datamaterias);
            return redirect('materias/');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Materias  $materias
         * @return \Illuminate\Http\Response
         */
        public function show(Materias $materia)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Materias  $materias
         * @return \Illuminate\Http\Response
         */
        /*public function edit(Materias $materias)
        {
            //
            return view('materias.edit');
        }*/
        public function edit($id) {
            $materias = Materias::findOrFail($id);
            return view('materias.edit', compact('materias'));
         }
    
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Materias  $materias
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id){
    
            $materias = Materias::findOrFail($id);
            $materias->update($request->all());
            return redirect('materias');
        }
        /*public function update(Request $request, Alumnos $alumnos)
        {
            //
        }*/
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Materias $materias
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
            Materias::destroy($id);
            return redirect('materias');
        }
    }
