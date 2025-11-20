<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
            <form  action="/cadastrar" method="post">
                @csrf
                 
               <!-- Marca -->  
                <div class="mt-4">   
            <x-input-label for="marca" :value="__('Marca da Bola Esportiva ( 3 até 50 caracteres)')" />
            <x-text-input id="marca" class="block mt-1 w-full" type="text" name="marca" :value="old('marca')" maxlength="50" required autofocus autocomplete="marca" />
            <x-input-error :messages="$errors->get('marca')" class="mt-2" />
        </div>
                      
               <!-- Esporte -->   
                <div class="mt-4">  
            <x-input-label for="esporte" :value="__('Esporte da Bola Esportiva ( 3 até 50 caracteres)')" />
            <x-text-input id="esporte" class="block mt-1 w-full" type="text" name="esporte" :value="old('esporte')" maxlength="50" required autofocus autocomplete="esporte" />
            <x-input-error :messages="$errors->get('esporte')" class="mt-2" />
        </div>   
              <!-- Pressao_psi -->   
                <div class="mt-4">  
            <x-input-label for="pressao_psi" :value="__('Pressão Média em PSI da Bola Esportiva ( valor inteiro)')" />
            <x-text-input id="pressao_psi" class="block mt-1 w-full" type="number" name="pressao_psi" :value="old('pressao_psi')"  required autofocus autocomplete="pressao_psi" />
            <x-input-error :messages="$errors->get('pressao_psi')" class="mt-2" />
        </div>   
            <!-- Diametro -->   
                <div class="mt-4">  
            <x-input-label for="diametro" :value="__('Diâmetro em CM da Bola Esportiva( precisão de duas casas decimais)')" />
            <x-text-input id="diametro" class="block mt-1 w-full" type="number" name="diametro"  step="0.01" :value="old('diametro')"  required autofocus autocomplete="diametro" />
            <x-input-error :messages="$errors->get('diametro')" class="mt-2" />
        </div>  

                  <!-- Padrao_Campeonato -->   
                <div class="mt-4">  
            <x-input-label for="padrao_campeonato" :value="__('Esta Bola Esportiva é padrão para campeonatos oficiais?')" />
            <input id="padrao_campeonatoTrue"  type="radio" name="padrao_campeonato" value="1"  {{ old('padrao_campeonato') == '1' ? 'checked' : '' }}   /> Sim
             <input id="padrao_campeonatoFalse"  type="radio" name="padrao_campeonato" value="0" {{ old('padrao_campeonato') == '0' ? 'checked' : '' }}   /> Não
            <x-input-error :messages="$errors->get('padrao_campeonato')" class="mt-2" />
        </div>  
         <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ms-4">
                {{ __('Cadastrar') }}
            </x-primary-button>
</form>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
