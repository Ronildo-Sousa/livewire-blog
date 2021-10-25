<section>
    <livewire:components.navbar />
    <div>
        <form  wire:submit.prevent='login'>
            @if(session('notAccess'))
                <p>{{ session('notAccess')}}</p>
            @endif
            <div>
                <input type="email" wire:model='email' placeholder="email">
                @error('email') <small class="text-red-600">{{ $message }}</small> @enderror
            </div>

            <div>
                <input type="password" wire:model='password' placeholder="password">
                @error('password') <small class="text-red-600">{{ $message }}</small> @enderror
            </div>
            <input type="submit" value="Sign In" wire:loading.remove wire:target='login'>
            <button wire:loading wire:target='login'>loading...</button>
        </form>
    </div>
</section>


