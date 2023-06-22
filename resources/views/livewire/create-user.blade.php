<div class="flex flex-col items-center sm:justify-center ">
    <div class="w-full px-6 py-4 mt-20 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg ">
        <form wire:submit.prevent='create'>

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" wire:model='name'
                    required autofocus autocomplete="name" />
                @error('name')
                <span class="mt-2 text-xs font-medium text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" wire:model='email'
                    required autocomplete="username" />
                    @error('email')
                    <span class="mt-2 text-xs font-medium text-red-600">{{ $message }}</span>
                    @enderror
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required wire:model='password'
                    autocomplete="new-password" />

                    @error('password')
                    <span class="mt-2 text-xs font-medium text-red-600">{{ $message }}</span>
                    @enderror
            </div>
            
            <div class="flex items-center justify-center mt-4">
                <x-primary-button type='submit'>
                    {{ __('Registrar') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</div>
