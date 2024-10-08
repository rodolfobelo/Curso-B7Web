<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index01()
    {
        $pessoas = [
            [
              'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
              'nome' => 'Alessandro',
              'birth' => '29/01/90',
              'idade' => 29
            ],
      
            [
              'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
              'nome' => 'Bonieky',
              'birth' => '10/11/1933',
              'idade' => 90
            ],
      
            [
              'image' => 'https://i.pravatar.cc/150?img=' . rand(0, 50),
              'nome' => 'Maria',
              'birth' => '01/01/2020',
              'idade' => 2
            ]
          ];
      
          $dados['pessoas'] = $pessoas;
      
          return view('modulo04.Exercicio01Componentes', $dados);
    }

    public function index02(){
        $url['url'] = 'https://i.pravatar.cc/150?img=';
        return view('modulo04.exercicio02', $url);
    }

    public function site(){
        return view('modulo04.site');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
