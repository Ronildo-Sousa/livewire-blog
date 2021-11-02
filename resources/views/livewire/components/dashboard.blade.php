<main>
    <livewire:components.navbar>

    <div class="mt-5 p-3 mb-5">
        <button wire:click="goToRoute('newArticle')" class="p-2 border border-gray-400">
            + new article
        </button>
        <button wire:click="goToRoute('newCategory')" class="p-2 border border-gray-400">
            + new category
        </button>
    </div>

    <div x-data="{ activePage: 'articles'}">
        <div>
            <button x-on:click="activePage = 'articles'">Articles</button>
            <button x-on:click="activePage = 'categories'">Categories</button>
        </div>

        <template x-if="activePage == 'articles'">
           <div>
                @foreach($articles as $article)
                    @livewire('components.list-item', ['type' =>  'article', 'data' => $article])
                @endforeach
           </div>
        </template>

        <template x-if="activePage == 'categories'">
           <div>
                @foreach($categories as $category)
                    @livewire('components.list-item', ['type' =>  'category', 'data' => $category])
                @endforeach
           </div>
        </template>
    </div>



</main>
