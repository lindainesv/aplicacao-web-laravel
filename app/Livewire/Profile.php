<?php
declare(strict_types=1);


namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Profile extends Component
{
// public $userId;

//    public function mount($id)
//    {
//         $this->userId = $id;
//         // dd($this->userId);
//    } 

    public function render()
    {
        // dd('home');
        return view('layouts.profile', ['profile'])->layout('layouts.app');
    }
}