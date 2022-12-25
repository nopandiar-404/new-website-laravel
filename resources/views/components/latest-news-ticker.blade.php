<div class="ticker-box mb-5">
    <div class="ticker-label text-center">
        <span>Latest News</span>
    </div>
    <div class="news-ticker px-3" id="app">
        @foreach ($latestNewsPosts as $latestNewsPost)
        <a href="{{ $latestNewsPost->slug }}" id="latest-news-{{ $loop->iteration }}">
            {{ $latestNewsPost->title}}
        </a>
        @endforeach
    </div>
</div>
