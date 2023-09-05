<div>
  <form class=" p-8 bg-gray-200 flex flex-col w-1/2 mx-auto gap-4">
    <h1>Search Zipcode</h1>

     <div class="flex flex-col w-1/2">
      <label for="zipcode">CEP</label>
      <input class="border"  id="zipcode" type="text" wire:model.lazy="zipcode"/>
      @error('zipcode')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
    </div>

     <div class="flex flex-col w-1/2">
      <label for="street">Rua</label>
      <input class="border" id="street" type="text" wire:model="street"/> 
      @error('street')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
    </div>

     <div class="flex flex-col w-1/2">
      <label for="neighborhood">Bairro</label>
      <input class="border" id="neighborhood" type="text" wire:model="neighborhood"/> 
      @error('neighborhood')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
    </div>

     <div class="flex flex-col w-1/2">
      <label for="city">Cidade</label>
      <input class="border" id="city" type="text" wire:model="city"/> 
      @error('city')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
     </div>

     <div class="flex flex-col w-1/2">
      <label for="state">Estado</label>
      <input class="border" id="state" type="text" wire:model="state"/> 
      @error('state')
        <span class="text-red-500">{{ $message }}</span>
      @enderror
    </div>

  <div>
    <button class="px-4 py-2 bg-green-500 hover:bg-green-400 text-white rounded-md" type="button" wire:click="save">
      Salvar Endereço
    </button>
  </div>

  </form>

  <hr> 
  <table class="table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">CEP</th>
        <th class="px-4 py-2">Rua</th>
        <th class="px-4 py-2">Bairro</th>
        <th class="px-4 py-2">Cidade</th>
        <th class="px-4 py-2">Estado</th>
        <th class="px-4 py-2">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($address as $address)
        <tr>
          <td class="border px-4 py-2">{{ $address ['zipcode'] }}</td>
          <td class="border px-4 py-2">{{ $address ['street'] }}</td>
          <td class="border px-4 py-2">{{ $address ['neighborhood'] }}</td>
          <td class="border px-4 py-2">{{ $address ['city'] }}</td>
          <td class="border px-4 py-2">{{ $address ['state'] }}</td>
          <td class="border px-4 py-2"> 
            
          <button 
            class="px-4 py-2 bg-blue-500 hover:bg-blue-400 text-white rounded-md" 
            wire:click="edit" 
            type="button">
            Editar
          </button>

          <button 
            class="px-4 py-2 bg-red-500 hover:bg-red-400 text-white rounded-md" 
            wire:click="remove" 
            type="button">
            Excluir
          </button>

          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
