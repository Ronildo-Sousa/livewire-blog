<nav class="flex justify-between p-4 bg-gray-700 text-white">
    <div>
        LOGO
    </div>

    @if (!auth()->user())
        <ul class="flex">
            <li class="mr-3" wire:click='getLoginForm'><button>Sign In</button></li>
            <li wire:click='getRegisterForm'><button>Get Started</button></li>
        </ul>
    @else
        <div>
            <button>meu perfil</button>
        </div>
    @endif

</nav>
