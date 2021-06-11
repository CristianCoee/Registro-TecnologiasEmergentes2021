<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notas;

class notasController extends Controller

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
            $data['notas']=notas::paginate(15);
            return view('notas.index', $data);
            /*$notas = notas::all();
            return view('notas.index', $notas);*/
    
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('notas.create');
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

       


            $datanotas = $request->except('_token','saveitem');
            notas::insert($datanotas);
            //return response()->json($datanotas);
            return redirect('notas/');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\notas  $notas
         * @return \Illuminate\Http\Response
         */
        public function show(notas $notas)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\notas  $notas
         * @return \Illuminate\Http\Response
         */
        /*public function edit(notas $notas)
        {
            //
            return view('notas.edit');
        }*/
        public function edit($id) {
            $notas = notas::findOrFail($id);
            return view('notas.edit', compact('notas'));
         }
    
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\notas  $notas
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id){
    
            $notas = notas::findOrFail($id);
            $notas->update($request->all());
            return redirect('notas');
        }
        /*public function update(Request $request, notas $notas)
        {
            //
        }*/
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\notas $notas
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
            notas::destroy($id);
            return redirect('notas');
        }
    }
