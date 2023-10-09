<div>
    <h2>Articles</h2>

    @foreach ($articles as $article)
        <div class="mb-6">
            <h3 class="text-xl">#{{ $article->id }} {{ $article->title }}</h3>
            <p>{{ $article->teaser }}</p>
        </div>
    @endforeach
    
    @if($articles->hasMorePages())
        <button class="btn btn-success" wire:click="loadMore">Load more</button>
    @endif
</div>