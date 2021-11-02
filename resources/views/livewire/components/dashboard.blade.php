<main>

    <livewire:components.navbar />

    <div class="mt-5 p-3 mb-5">
        <button wire:click="goToRoute('newArticle')" class="p-2 border border-gray-400">
            + new article
        </button>
        <button wire:click="goToRoute('newCategory')" class="p-2 border border-gray-400">
            + new category
        </button>
    </div>

    <div x-data="{ activePage: 'articles', activeArticle: true, activeCategory: false}" >
        <div class="text-center mb-8">
            <button
                x-on:click="activePage = 'articles', activeArticle = true, activeCategory = false"
                x-bind:class="activeArticle ? 'border-b-2 border-indigo-500' : ''"
                class="text-gray-700 font-semibold hover:text-gray-900 mr-5">Articles</button>
            <button
            x-on:click="activePage = 'categories', activeArticle = false, activeCategory = true"
            x-bind:class="activeCategory ? 'border-b-2 border-indigo-500' : ''"
            class="text-gray-700 font-semibold hover:text-gray-900">Categories</button>
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
