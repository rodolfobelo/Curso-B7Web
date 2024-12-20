<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $r)
    {
        return $addresses = Address::all();
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $r)
    {
        $addressRow = $r->only(['address', 'users_id']);
        return $address = Address::create($addressRow);
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
        $addreess = Address::find($id);
        $addreess['user'] = $addreess->user;
        return $addreess;
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
