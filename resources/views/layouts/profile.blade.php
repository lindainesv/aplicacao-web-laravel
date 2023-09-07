



<div class="">
    <section>

        <form class=" p-8 bg-gray-200 flex flex-col w-1/2 mx-auto gap-4" method="POST" >
            <header>
                <h2 className="">Informações do Perfil</h2>
                <p className="">Atualize as informações do seu perfil </p>
            </header>

            {{-- <div>
                <label for="avatar">Avatar</label>
                <input class="border" id="avatar" type="file" wire:model="avatar"/>
                @error('avatar')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                @if ($avatar)
                    <img src="{{ $avatar->temporaryUrl() }}" alt="Avatar">
                @endif

                @if ($user->avatar)
                    <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar">

                @endif
            </div> --}}




        <div class="flex flex-col w-1/2">
            <label for="name">Nome</label>
            <input class="border" id="name" type="text" wire:model="name"/>
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

            <div class="flex flex-col w-1/2">
                <label for="email">Email</label>
                <input class="border" id="email" type="text" wire:model="email"/>
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex flex-col w-1/2">
                <label for="password">Senha</label>
                <input class="border" id="password" type="password" wire:model="password"/>
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            {{-- <div class="flex flex-col w-1/2">
            <label for="password_confirmation">Confirmação de Senha</label>
            <input class="border" id="password_confirmation" type="password" wire:model="password_confirmation"/>
            @error('password_confirmation')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            </div> --}}

            <div>
                <button class="px-4 py-2 bg-green-500 hover:bg-green-400 text-white rounded-md" type="button" wire:click="save">
                  Salvar Endereço
                </button>
              </div>

        </form>
    </section>
</div>

