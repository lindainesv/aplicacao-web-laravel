<?php
declare(strict_types=1);

namespace App\Livewire;

use App\Models\Address;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchZipcode extends Component
{
  protected array $rules = [
    'zipcode' => ['required'],
    'street' => ['required'],
    'neighborhood' => ['required'],
    'city' => ['required'],
    'state' => ['required', 'max:2'],
  ];
  
  protected array $messages = [
    'zipcode.required' => 'O campo CEP é obrigatório',
    'street.required' => 'O campo ENDEREÇO é obrigatório',
    'neighborhood.required' => 'O campo BAIRRO é obrigatório',
    'city.required' => 'O campo CIDADE é obrigatório',
    'state.required' => 'O campo ESTADO é obrigatório',
    'state.max' => 'O campo ESTADO deve conter 2 caracteres', 
    // 'zipcode.size' => 'O campo CEP deve conter 8 caracteres',
  ];
  
  public string $zipcode = '';
  public string $street = '';
  public string $neighborhood = '';
  public string $city = '';
  public string $state = '';
  public array $address = [];
  
  public function updatedZipcode(string $value) { 
    $response = Http::withoutVerifying()->get("https://viacep.com.br/ws/{$value}/json/")->json();
    
      $this->zipcode = $response['cep'];
      $this->street = $response['logradouro'];
      $this->neighborhood = $response['bairro'];
      $this->city = $response['localidade'];
      $this->state = $response['uf'];
  }

  public function save(): void {
    
    $this->validate();

    Address::updateOrCreate (
      [
      'zipcode' => $this->zipcode,
      ],
      [
      'street' => $this->street,
      'neighborhood' => $this->neighborhood,
      'city' => $this->city,
      'state' => $this->state,
      ]);

      $this->render();

      $this->resetExcept('address');
  }

  // public function mount(): void {}

    public function render()
    {
        $this->address = Address::all()->toArray();

        return view('livewire.search-zipcode')->layout('layouts.app');
    }
}
