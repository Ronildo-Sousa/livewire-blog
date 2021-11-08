<div>
   <button
   wire:loading.class='hidden'
   wire:click='delete'
   class="text-white font-semibold px-3 py-1 bg-red-500 rounded hover:bg-red-600"
   >
    delete
   </button>
   <button
   wire:loading
   wire:loading.class='cursor-not-allowed'
   wire:target='delete'
   class="text-white font-semibold px-3 py-1 bg-gray-500 rounded hover:bg-gray-600"
   >
    loading...
   </button>
</div>
