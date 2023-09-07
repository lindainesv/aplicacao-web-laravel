<div>
<form class="p-8 bg-gray-200 flex flex-col w-1/2 mx-auto gap-4">

    <h1>Cadastro de Usuário</h1>

        <div class="flex flex-col w-1/2">
                <label for="name">Nome</label>
                <input id="name" type="text" class="border" name="name" required autocomplete="name" autofocus wire:model="name"/>
                @error('name')
                    <span class="text-red-500" role="alert">{{ $message }} </span>
                @enderror
        </div>

            <div class="flex flex-col w-1/2">
            <label for="email">Email</label>
            <div class="">
                <input id="email" type="email" class="border" name="email" required autocomplete="email" wire:model="email"/>
                @error('email')
                    <span class="text-red-500" role="alert">{{ $message }} </span>
                @enderror            </div>
        </div>

        <div class="flex flex-col w-1/2">
            <label for="password" class="">Senha</label>

            <div class="col-md-6">
                <input id="password" type="password" class="border" name="password" required autocomplete="new-password" wire:model="password"/>
                @error('password')
                    <span class="text-red-500" role="alert">{{ $message }} </span>
                @enderror            </div>
        </div>

        {{-- <div class="flex flex-col w-1/2">
            <label for="password.confirmed" class="">Confirme sua senha</label>
            <div class="">
                <input id="password-confirmed" type="password" class="border" name="password_confirmation" required autocomplete="new-password" wire:model="password"/>
                @error('password-confirmed')
                <span class="text-red-500" role="alert">{{ $message }} </span>
            @enderror
            </div>
        </div> --}}

        <div class="">
            <div>
                <button class="px-4 py-2 bg-green-500 hover:bg-green-400 text-white rounded-md" type="button" wire:click="save">
                  Salvar
                </button>
              </div>
        </div>
    </form>
</div>
