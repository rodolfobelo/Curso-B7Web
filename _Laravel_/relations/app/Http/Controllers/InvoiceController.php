<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return $invoices = Invoice::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $r)
    {
        $invoicesRow = $r->only(['description', 'value', 'address_id']);
        return $invoices = Invoice::create($invoicesRow);
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
    public function show(Request $r)
    {
        $invoice = Invoice::find($r->id);
        $invoice['addres'] = $invoice->address;
        return $invoice;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $invoice = Invoice::find($id);
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
        return $invoice = Invoice::destroy($id);
    }
}
