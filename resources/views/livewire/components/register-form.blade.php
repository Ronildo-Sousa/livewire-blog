<section>
    <livewire:components.navbar />

    <div>
        <form  wire:submit.prevent='save'>
            <div>
                <input type="text" wire:model='name' placeholder="full name">
                @error('name') <small class="text-red-600">{{ $message }}</small> @enderror
            </div>

            <div>
                <input type="email" wire:model='email' placeholder="email">
                @error('email') <small class="text-red-600">{{ $message }}</small> @enderror
            </div>

            <div>
                <input type="password" wire:model='password' placeholder="password">
                @error('password') <small class="text-red-600">{{ $message }}</small> @enderror
            </div>
            <input type="submit" value="register" wire:loading.remove wire:target='save'>
            <button wire:loading wire:target='save'>loading...</button>
        </form>
    </div>
</section>
