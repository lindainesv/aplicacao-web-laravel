<?php
declare(strict_types=1);

namespace App\Livewire;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Livewire\Component;

class Login extends Component
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::PROFILE;

        public function render()
        {
            return view('auth.login')->layout('layouts.app');
        }


//         public function save(): void {
    
//             $this->validate();
        
//             User::updateOrCreate (
//               [
//               'email' => $this->email,
//               ],
//               [
//               'name' => $this->name,
//               'password' => $this->password,
//               ]);
        
//               $this->render();
        
//               $this->resetExcept('users');
//           }
// }
}