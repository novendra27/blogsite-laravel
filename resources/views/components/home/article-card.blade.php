<div class="border-b-2 border-gray-200 mr-8 mb-4">
    <a href="/article/{{ $article->slug }}" class="hover:underline hover:text-blue-800">
        <h3 class="text-lg font-semibold py-1">{{ $article->title }}</h3>
    </a>
    <p class="text-xs">
        <a href="/authors/{{ $article->author->slug }}" class="hover:underline hover:text-blue-800">
            {{ $article->author->name }} 
        </a>
        | {{ $article->created_at->format('d M Y') }} |
        <a href="/category/{{ $article->category->slug }}" class="hover:underline hover:text-blue-800">
            {{ $article->category->name }}
        </a>
    </p>
    <p class="text-base py-2 mb-2">{{ Str::limit($article->content, 270) }}</p>
</div>
