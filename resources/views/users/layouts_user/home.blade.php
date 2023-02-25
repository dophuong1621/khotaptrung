<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KHOTAPTRUNG</title>
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('assetsU') }}/css/home.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assetsU') }}/css/header.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assetsU') }}/css/footer.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assetsU') }}/css/trang-chu.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assetsU') }}/css/box-right-content.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assetsU') }}/css/modal.css" rel="stylesheet" type="text/css">
    {{-- <link href="{{ asset('assetsU') }}/css/recharge.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="{{ asset('assetsU') }}/css/withdraw-items.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="{{ asset('assetsU') }}/css/list-voucher.css" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="{{ asset('assetsU') }}/css/history.css" rel="stylesheet" type="text/css"> --}}
    {{-- select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- -- --}}
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/2e687b4c2d.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="containerr">
        {{-- navbar --}}
        @include('users.layouts_user.header')
        {{-- content --}}
        @yield('content')
        @include('users.modal')
        {{-- footer --}}
        @include('users.layouts_user.footer')
    </div>
    <!-- Latest compiled JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsU/js/home.js') }}"></script>
</body>

</html>
