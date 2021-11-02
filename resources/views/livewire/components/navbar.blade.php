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
        <!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative inline-block text-left">
    <div>
      <button wire:click='toggleDropdown' type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
      </button>
    </div>

    <div @class([
        'origin-top-right', 'absolute', 'right-0', 'mt-2', 'w-56', 'rounded-md', 'shadow-lg', 'bg-white', 'ring-1', 'ring-black', 'ring-opacity-5', 'focus:outline-none',
        'hidden' => !$openDropdown
    ]) role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
    {{-- <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"> --}}
      <div class="py-1" role="none">
        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200">My Profile</a>
        <a wire:click='logout' href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200">Sing Out</a>
      </div>
    </div>
  </div>

    @endif

</nav>
