<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController {

    public function index() {
        return view('index');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'email' => ['required'],
            'nama' => ['required'],
            'alamat' => ['required'],
            'photo' => ['nullable'],
        ]);

        if($request->hasFile('photo')){
            

            $filename = $request->file('photo')->store('post-image','public'); // jangan lupa dibikin publik 
            $validated['photo'] = $filename;

        }
        

        Customer::create($validated);
        
        return redirect()->route('index');
    }

}