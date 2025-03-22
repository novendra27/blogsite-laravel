<div class="mb-5">
    <h5 class="font-semibold mb-3">Recommended Topics</h5>
    @foreach ($categories as $category)
        <button class="bg-gray-200 rounded-full px-3 py-1 my-1 mr-1 text-sm">
            {{ $category->name }}
        </button>
    @endforeach
    <p class="mt-3 text-sm text-gray-500">See more topics</p>
</div>

<div class="mb-5">
    <h5 class="font-semibold mb-3">Recommended Authors</h5>
    @foreach ($authors as $author)
        <button class="bg-gray-200 rounded-full px-3 py-1 my-1 mr-1 text-sm">
            {{ $author->name }}
        </button>
    @endforeach
    <p class="mt-3 text-sm text-gray-500">See more authors</p>
</div>
