<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>World News</title>

    <link rel="shortcut icon"
        href="https://static.vecteezy.com/system/resources/thumbnails/007/925/780/small/tv-news-icon-isolated-on-white-background-free-vector.jpg"
        type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('dist/css/iziModal.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Crete+Round:ital@0;1&family=Roboto+Slab:wght@500&family=Rubik:wght@400;500&family=Vollkorn:wght@400;500;700&display=swap"
        rel="stylesheet" />



    <script src="https://kit.fontawesome.com/18c274e5f3.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="{{ asset('dist/js/iziModal.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dist/js/iziToast.min.js') }}" type="text/javascript"></script>



    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <x-dashboard-sidebar />


    <div id="main">
        <div class="row p-4 bg-secondary">
            <div class="col-12 d-flex align-items-center">
                <div onclick="toggleNav()" class="me-5" style="cursor: pointer">
                    <i class="fa-solid fa-bars fs-4"></i>
                </div>
                <div>
                    <h2>@yield("title")</h2>
                </div>
            </div>
        </div>
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/assets/js/typewritter.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/preview_upload_image.js"></script>

    @if (session()->get("success"))
    <script>
        iziToast.success({
    title: 'Completed',
    position:"topRight",
    message: '{{ session("success") }}',
});
    </script>
    @endif
    @if (session()->get("error"))
    <script>
        iziToast.error({
    title: 'Error',
    position:"topRight",
    message: '{{ session("error") }}',
});
    </script>
    @endif
    @if (session()->get("info"))
    <script>
        iziToast.info({
    title: 'Deleted',
    position:"topRight",
    message: '{{ session("info") }}',
});
    </script>
    @endif

</body>

</html>
