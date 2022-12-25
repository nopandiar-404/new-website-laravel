<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Crete+Round:ital@0;1&family=Roboto+Slab:wght@500&family=Rubik:wght@400;500&family=Vollkorn:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/18c274e5f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/style.css" />




    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">
    <script src="{{ asset('dist/js/iziToast.min.js') }}" type="text/javascript"></script>
</head>

<body>
    <div class="container p-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-8">
                <div class="card p-5 mt-5 shadow-sm">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/assets/js/control_form_input.js"></script>





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
