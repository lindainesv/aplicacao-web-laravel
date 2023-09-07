<?php
declare(strict_types=1);


namespace App\Livewire;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Register extends Component
{
    
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::PROFILE;
    
    protected array $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8', ],
    ];
    
    protected array $messages = [
        'name.required' => 'O campo NOME é obrigatório',
        'name.max' => 'O campo NOME deve conter no máximo 255 caracteres',
        'email.required' => 'O campo EMAIL é obrigatório',
        'email.email' => 'O campo EMAIL deve conter um email válido',
        'email.max' => 'O campo EMAIL deve conter no máximo 255 caracteres',
        'password.required' => 'O campo SENHA é obrigatório',
        'password.min' => 'O campo SENHA deve conter no mínimo 8 caracteres',
        // 'password.confirmed' => 'O campo SENHA deve ser igual ao campo CONFIRMAR SENHA',
    ];

    public string $name = '';
    public string $email = '';
    public string $password = '';


    public function save(): void
    {
        $this->validate();

        User::updateOrCreate(
            [
                'email' => $this->email,
            ],
            [
                'name' => $this->name,
                'password' => $this->password
            ]
        );

        $this->reset('user');
        redirect()->route('profile');


    }

    //     // {
    //     //     return User::create([
    //     //         'name' => $data['name'],
    //     //         'email' => $data['email'],
    //     //         'password' => Hash::make($data['password']),
    //     //     ]);
    //     // }

    // } 

    // public function updated(string $field)
    // {
    //     $this->validateOnly($field);
    //     $this->name = $field['nome'];
    //     $this->email = $field['email'];
    //     $this->password = $field['senha'];

        
    //     dd($field);
    // }

    // public function mount(): void {
    //     // dd('auth.register');
    // }
    
    // public function cadastrarUsuario(Request $request)
    // {
    //     $userId = \Illuminate\Support\Facades\DB::table('users')->insertGetId([
    //         'name' => $request->nome,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->senha),
    //     ]);
    //     return $redirecto()->route('profile');
    // }
    
    public function render()
    {
        return view('auth.register')->layout('layouts.app');
        
    }
}