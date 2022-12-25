@props(["posts"])

<header class="header">
    <div class="container py-3 my-4">

        <x-latest-news-ticker />

        <div class="row g-2">
            @foreach ($posts as $post)
            @if ($loop->iteration > 1)
            @break
            @endif
            <div class="col-lg-6 col-md-12">
                <div class="card bg-dark text-white overflow-hidden h-100">
                    <img src="{{ $post->photo }}" alt="" style="height: 100%; object-fit: cover">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h3 class="card-title">
                            <a href="{{ route('news.show',$post->slug) }}" class="text-white text-decoration-none">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="card-text">{{$post->body}}</p>
                        <a href="#" class="header-news-tag text-white my-1">Life</a>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="icon-box">
                                <span>
                                    <i class="fa-solid fa-user me-1"></i>
                                    <a href="#" class="text-white">Aung Thu Zaw</a>
                                </span>
                                <span>
                                    <i class="fa-solid fa-calendar-days me-1"></i>
                                    <a href="#" class="text-white">
                                        {{ DateTimeHelper::formatDate($post,"created_at") }}
                                    </a>
                                </span>
                            </div>
                            <div>
                                <span class="update-text">
                                    {{ $post->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="col-lg-3 col-md-12">
                <div class="row g-2">
                    @foreach ($posts as $post)
                    @if ($loop->iteration == 1)
                    @continue
                    @endif

                    @if ($loop->iteration >3)
                    @break
                    @endif
                    <div class="col-12" style="height: 240px">
                        <div class="card bg-dark overflow-hidden text-white h-100">
                            <img src="{{ $post->photo }}" alt="" style="height: 100%; object-fit: cover">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title">
                                    <a href="{{ route('news.show',$post->slug) }}"
                                        class="text-white text-decoration-none">
                                        {{ $post->title }}
                                    </a>
                                </h5>
                                <p class="card-text description d-lg-none d-xl-block">
                                    {{ StringHelper::description($post->body) }}
                                </p>
                                <a href="#" class="header-news-tag-sm text-white my-1">Life</a>
                                <div class="icon-box-sm">
                                    <span>
                                        <i class="fa-solid fa-user me-1"></i>
                                        <a href="#" class="text-white">Aung Thu Zaw</a>
                                    </span>
                                    <span>
                                        <i class="fa-solid fa-calendar-days me-1"></i>
                                        <a href="#" class="text-white">
                                            {{ DateTimeHelper::formatDate($post,"created_at") }}
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-3 col-md-12">
                <div class="row g-2">
                    @foreach ($posts as $post)
                    @if ($loop->iteration < 4) @continue @endif <div class="col-12" style="height: 240px">
                        <div class="card bg-dark overflow-hidden text-white h-100">
                            <img src="{{ $post->photo }}" alt="" style="height: 100%; object-fit: cover">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title">
                                    <a href="{{ route('news.show',$post->slug) }}"
                                        class="text-white text-decoration-none">
                                        {{ $post->title }}
                                    </a>
                                </h5>
                                <p class="card-text description d-lg-none d-xl-block">
                                    {{ StringHelper::description($post->body) }}
                                </p>
                                <a href="#" class="header-news-tag-sm text-white my-1">Life</a>
                                <div class="icon-box-sm">
                                    <span>
                                        <i class="fa-solid fa-user me-1"></i>
                                        <a href="#" class="text-white">Aung Thu Zaw</a>
                                    </span>
                                    <span>
                                        <i class="fa-solid fa-calendar-days me-1"></i>
                                        <a href="#" class="text-white">
                                            {{ DateTimeHelper::formatDate($post,"created_at") }}
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    </div>
</header>
