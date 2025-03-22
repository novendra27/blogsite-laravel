<div class="border-b-2 border-gray-200 mr-8 mb-4">
    <h3 class="text-lg font-semibold py-1">{{ $article->title }}</h3>
    <p class="text-xs">{{ $article->author->name }} | {{ $article->created_at }}</p>
    <p class="text-base py-2 mb-2">{{ Str::limit($article->content, 270) }}</p>
</div>