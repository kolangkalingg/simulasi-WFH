<?php

namespace App\Livewire;

use App\Models\Counter as ModelsCounter;
use Livewire\Component;

class Counter extends Component
{

    public $nama;
    public $email ;
    public $alamat;
    public $dataCounter;

    public function store(){
        $rules = [
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required'
        ];
        $pesan = [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak sesuai',
            'alamat.required' => 'Alamat wajib diisi',
        ];
        $validated = $this->validate($rules, $pesan);
        ModelsCounter::create($validated);
        session()->flash('message', 'Data Berhasil dimasukan');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
