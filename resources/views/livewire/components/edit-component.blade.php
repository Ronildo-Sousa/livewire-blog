<div
    class="w-9/12 md:w-10/12 flex justify-between py-3 px-8 mx-auto shadow-md mb-2 mt-3 rounded cursor-pointer border border-gray-200 hover:bg-gray-200">
    @if($type === 'category')
        <div class="w-full flex">
            <div class="w-full flex flex-col mr-5">
                <input type="text" wire:model='name' autofocus
                    class="w-full mr-5 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded">
                @error('name')
                    <span class="text-red-500">
                        <small>{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div>
                <button wire:click='save' wire:loading.class='hidden' class="p-2 text-white font-medium rounded bg-indigo-500 hover:bg-indigo-600">
                    save
                </button>
                <button wire:loading wire:loading.class='cursor-not-allowed' wire:target='save'
                    class="text-white font-semibold p-2 bg-gray-500 rounded hover:bg-gray-600">
                    loading...
                </button>
            </div>
        </div>
    @endif

    @if ($type === 'article')
        <div class="w-full flex">
            <div class="w-full flex flex-col mr-5">
                <input type="text" wire:model='title' autofocus
                    class="w-full mr-5 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded">
                @error('title')
                    <span class="text-red-500">
                        <small>{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div class="w-full flex flex-col mr-5">
                <input type="text" wire:model='body'
                    class="w-full mr-5 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded">
                @error('body')
                    <span class="text-red-500">
                        <small>{{ $message }}</small>
                    </span>
                @enderror
            </div>
            <div>
                <button wire:click='save' wire:loading.class='hidden' class="p-2 text-white font-medium rounded bg-indigo-500 hover:bg-indigo-600">
                    save
                </button>
                <button wire:loading wire:loading.class='cursor-not-allowed' wire:target='save'
                    class="text-white font-semibold p-2 bg-gray-500 rounded hover:bg-gray-600">
                    loading...
                </button>
            </div>
        </div>
    @endif
</div>
