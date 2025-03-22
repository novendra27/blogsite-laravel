<x-layout.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="grid grid-cols-1 grid-rows-1 gap-4 pb-4 border-b-2 border-gray-200 text-stone-800">
        <div class="col-span-1 mt-4">
            @foreach ($articles as $article)
                <x-home.article-card :article="$article" />
            @endforeach
        </div>
    </div>
</x-layout.layout>
