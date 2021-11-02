<main>
    <livewire:components.navbar >


        <div>
            <button
                wire:click="goToRoute('newArticle')"
                class="p-2 border border-gray-400"
            >
                + new article
            </button>
        </div>

        @foreach ($articles as $article)
            <div
                class="bg-gray-200 p-2 mb-2"
            >
                {{ $article->title}}
            </div>
        @endforeach

</main>
