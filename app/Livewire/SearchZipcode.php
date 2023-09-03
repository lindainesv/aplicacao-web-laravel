<?php
declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchZipcode extends Component
{
  // public function mounth(): void
  // {
  //   $response = Http::get("https://viacep.com.br/ws/01001000/json/")->json();
  //   dump($response);
  
  // }
    public function render()
    {
      $response = Http::withoutVerifying()->get("https://viacep.com.br/ws/01001000/json/")->json();
      dd($response);
  

        return view('livewire.search-zipcode')
        ->layout('layouts.app');
}
}
