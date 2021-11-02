<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Create a new catgory
            </h2>
        </div>
        <div>
            @error('name')
                <div
                    class="bg-red-500 p-2 mb-3 text-white text-center rounded"
                >
                    {{ $message }}
                </div>
            @enderror

        </div>
        <div class="mt-8 space-y-6">

            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label class="sr-only">Name</label>
                    <input wire:model='name' type="text" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Name">
                </div>
            </div>

            <div>
                <button wire:click="save" wire:loading.class='hidden'
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create
                </button>
                <div wire:loading.class='hidden' wire:target='save'>
                    <span wire:click='goBack'
                        class="mt-4 cursor-pointer group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600">
                        Cancel
                    </span>
                </div>
                <button wire:loading wire:target='save'
                    class="cursor-not-allowed group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                    Loading...
                </button>
            </div>
        </div>
    </div>
</div>

