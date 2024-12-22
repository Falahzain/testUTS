<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\User;
use Symfony\Component\Mime\Email;

class UserComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $nama, $email, $password;
    public function render()
    {
        $layout["title"] = "Kelola User"; 
        $data['user'] = User::paginate(2);
        return view('livewire.user-component', $data)->layoutData($layout);
    }
    public function store(){
        $this->validate([
            'nama'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ], [
            'nama.required' => 'Nama Tidak Boleh Kosong!',
            'email.required' => 'Email Tidak Boleh Kosong!',
            'email.email' => 'Format Email Salah',
            'password.required' => 'Password Tidak Boleh Kosong!'
        ]);
        User::create([
            'nama'=> $this->nama,
            'email'=> $this->email,
            'password'=> ($this->password),
            'jenis'=> 'admin'
        ]);
        session()->flash('succes','Berhasil Disimpan!');
        $this->reset();
        
    }
}
