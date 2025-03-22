<x-layout.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grid grid-cols-1 grid-rows-1 gap-4 pb-4 border-b-2 border-gray-200 text-stone-800">
        <div class="col-span-1 mt-4">
            <div class="mr-8 mb-4">
                <h3 class="text-lg font-semibold py-1">{{ $article->title }}</h3>
                <p class="text-xs">
                    {{ $article->author->name }} | {{ $article->created_at->format('d M Y') }} |
                    {{ $article->category->name }}
                </p>
                <p class="text-base py-2 mb-2">{{ $article->content }}</p>
            </div>
        </div>
    </div>
</x-layout.layout>
