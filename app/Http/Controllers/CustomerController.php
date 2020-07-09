<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    { return Customer::all(); }
    public function show(Customer $customer)
    { return $customer; }
    public function store(Request $request)
    { return response()->json($customer, 201); }
    public function update(Request $request, Customer $article)
    { $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return response()->json($customer, 200); }
    public function delete(Request $request, $id)
    { $customer = Customer::findOrFail($id);
        $customer->delete(); return 204; }
}
