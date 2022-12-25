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
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
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

    <div class="container p-5">
        <h1 class="py-3 border-5 border-bottom my-5">Edit Profile</h1>

        <div class="row">
            <div class="col-lg-12">
                <div class="border shadow-sm p-3 mb-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <script src="/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/typewritter.js"></script>
    <script src="/assets/js/control_form_input.js"></script>
    <script src="/assets/js/preview_upload_image.js"></script>


    @if (session()->get("success"))
    <script>
        iziToast.success({
    title: 'Updated',
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
</body>

</html>
