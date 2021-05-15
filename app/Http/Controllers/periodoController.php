<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\periodo;

class periodoController extends Controller

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
            $data['periodo']=Periodo::paginate(15);
            return view('periodo.index', $data);
            /*$periodo = Periodo::all();
            return view('periodo.index', $periodo);*/
    
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('periodo.create');
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

            $validatedData = $request->validate([
                'periodo' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
                'dias' => 'required|numeric',
                'año' => 'required|numeric',
                'estado' => 'required|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
            ]);
        
            $dataperiodo = $request->except('_token','saveitem');
            Periodo::insert($dataperiodo);
            //return response()->json($dataperiodo);
            return redirect('periodo/');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Perido  $periodo
         * @return \Illuminate\Http\Response
         */
        public function show(Periodo $perido)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Periodo  $alumnos
         * @return \Illuminate\Http\Response
         */
        /*public function edit(Periodo $periodo)
        {
            //
            return view('periodo.edit');
        }*/
        public function edit($id) {
            $periodo = Periodo::findOrFail($id);
            return view('periodo.edit', compact('periodo'));
         }
    
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Periodo  $periodo
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id){
    
            $periodo = Periodo::findOrFail($id);
            $periodo->update($request->all());
            return redirect('periodo');
        }
        /*public function update(Request $request, Alumnos $alumnos)
        {
            //
        }*/
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Periodo $periodo
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
            Periodo::destroy($id);
            return redirect('periodo');
        }
    }
