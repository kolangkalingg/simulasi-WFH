<?php

namespace App\Livewire;

use App\Models\Counter as ModelsCounter;
use Livewire\Component;
use Livewire\WithPagination;

class Counter extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $nama;
    public $email ;
    public $alamat;
    public $updateData = false;
    public $counter_id;
    public $katakunci;
    public $counter_selected_id = [];
    public $sortColumn = 'nama';
    public $sortDirection = 'asc';

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

        $this->clear();
    }

    public function edit($id){
        $data = ModelsCounter::find($id);
        $this->nama = $data->nama;
        $this->email = $data->email;
        $this->alamat = $data->alamat;
        $this->updateData = true;
        $this->counter_id = $id;
    }

    public function update()
    {
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
        $data = ModelsCounter::find($this->counter_id);
        $data->update($validated);
        session()->flash('message', 'Data Berhasil di-update');

        $this->clear();
    }

    public function clear()
    {
        $this->nama = '';
        $this->email = '';
        $this->alamat = '';

        $this->updateData = false;
        $this->counter_id = '';
        $this->counter_selected_id = [];
    }

    public function delete()
    {
        if($this->counter_id != ''){
            $id = $this->counter_id;
            ModelsCounter::find($id)->delete();
        }
        if(count($this->counter_selected_id)){
            for($x= 0; $x < count($this->counter_selected_id); $x++){
                ModelsCounter::find($this->counter_selected_id[$x])->delete();
            }
        }
        session()->flash('message', 'Data Berhasil di-delete');
        $this->clear();
    }

    public function delete_confirmation($id){
        if ($id != ''){
            $this->counter_id = $id;
        }
    }

    public function sort($columnName)
    {
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }

    public function render()
    {
        if ($this->katakunci != null) {
            $data = ModelsCounter::where('nama', 'like', '%'.$this->katakunci. '%')
            ->orwhere('email', 'like', '%'.$this->katakunci. '%')
            ->orwhere('alamat', 'like', '%'.$this->katakunci. '%')
            ->orderBy($this->sortColumn,$this->sortDirection)->paginate(1);
        } else{
        $data = ModelsCounter::orderBy($this->sortColumn,$this->sortDirection)->paginate(10);
        }
        return view('livewire.counter', ['dataCounters' => $data]);
    }
}
