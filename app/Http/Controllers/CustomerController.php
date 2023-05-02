<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public $customer;
    public function __construct()
    {
       $this->customer = new Customer;
       
       
    }


    //menampilkan all data customer
    public function index()
    {
        $customer = Customer::all();

        return view('customer.index', compact('customer'));
    }

  
    //tampilan inputan customer
    public function create()
    {
        return view('customer.create');
    }

    

    //fungsi menambahkan data customer
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required|min:3|max:50',
            'alamat' => 'required|max:100',
            'kota' => 'required|max:100',
            'email' => 'required|max:100',
            'handphone' => 'required|max:100',
            'perusahaan' => 'required|max:20',
           ];

        $messages = [
            'required' => ":attribute ga boleh kosong",
            'min' => ":attribute kurang pas input ulang",
            'max' => ":attribute inputan terlalu banyak"
            
        ];
        $this->validate($request, $rules, $messages);

        $this->customer->nama = $request->nama;
        $this->customer->alamat = $request->alamat;
        $this->customer->kota = $request->kota;
        $this->customer->email = $request->email;
        $this->customer->hp = $request->handphone;
        $this->customer->perusahaan = $request->perusahaan;

        $this->customer->save();

        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

   //fungsi delete customer
    public function delete($id)
    {
        $destroy = Customer::findOrFail($id);
       
        $destroy->delete();
            
        return redirect()->route('customer.index');
    }
}
