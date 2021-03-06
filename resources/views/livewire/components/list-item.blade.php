<div class="w-full">
    @if(!$editing)
        <div
            class="w-9/12 md:w-10/12 flex justify-between py-3 px-8 mx-auto shadow-md mb-2 mt-3 rounded cursor-pointer border border-gray-200 hover:bg-gray-200">
            @if($type === 'category')
                <p class="mr-5 font-semibold">{{ $data->name }}</p>
            @endif

            @if($type === 'article')
                <p class="mr-5 font-semibold">{{ $data->title }}</p>
                <p class="mr-5">{{ $data->body }}</p>
                <p class="mr-5">{{ $data->num_likes }} likes</p>
            @endif

            <div class="flex">
                <button wire:click='edit'
                    class="text-white font-semibold px-3 py-1 bg-indigo-500 rounded hover:bg-indigo-600">
                    edit
                </button>
                <livewire:components.delete-button :type="$type" :data="$data" />
            </div>
        </div>
    @else
        <livewire:components.edit-component :type="$type" :data="$data">
    @endif

</div>
