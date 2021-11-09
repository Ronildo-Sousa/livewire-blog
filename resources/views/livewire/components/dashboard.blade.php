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

    <div
        x-data="{ activePage: true }"
        class="text-center mb-10">
        <label
            x-on:click="activePage = true"
            for="articles"
            :class="(activePage) ? 'border-b-4 border-indigo-500' : ''"
            class="p-2 font-medium cursor-pointer hover:bg-gray-200">
            <input
            wire:model='type'
            name="type"
            id="articles"
            type="radio"
            value="article"
            class="hidden" />
            <span>Articles</span>
        </label>

        <label
            x-on:click="activePage = false"
            for="categories"
            :class="(!activePage) ? 'border-b-4 border-indigo-500' : ''"
            class="p-2 font-medium cursor-pointer hover:bg-gray-200">
            <input
            wire:model='type'
            name="type"
            id="categories"
            type="radio"
            value="category"
            class="hidden" />
            <span>Categories</span>
        </label>
    </div>

    <div>
        @if ($type === 'article')
            @foreach ($articles as $article)
                <livewire:components.list-item :type="$type" :data="$article" :key="$article->id">
            @endforeach

            @if (sizeof($articles) === 0)
                <livewire:components.empty-component :message="'We dont have articles to show'">
            @endif
        @endif

        @if($type === 'category')
            @foreach ($categories as $category)
                <livewire:components.list-item :type="$type" :data="$category" :key="$category->id . '/category'">
            @endforeach

            @if (sizeof($categories) === 0)
                <livewire:components.empty-component :message="'We dont have categories to show'">
            @endif
        @endif

    </div>
</main>
