<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:site_name" content="APY Wallet">
    <meta name="title" content="APY Wallet">
    <meta property="og:title" content="APY Wallet">
    <meta property="twitter:title" content="APY Wallet">
    <meta name="description" content="Step into the decentralization">
    <meta property="twitter:description" content="Step into the decentralization">
    <meta property="og:description" content="Step into the decentralization">
    <meta property="og:url" content="/">
    <meta property="og:image" content="/img/preview.png">
    <meta name="twitter:image:src" content="/img/preview.png">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/css/iziModal.css" integrity="sha512-uZ+G0SzK4GMUDUzxzbIeLGLjYgAhQ2KrIV4bWIP5o6URt5XVcn8S02eW6C1DH35bqq/XX1jYwlhhNPPIE1+q1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/css/iziModal.min.css" integrity="sha512-3c5WiuZUnVWCQGwVBf8XFg/4BKx48Xthd9nXi62YK0xnf39Oc2FV43lIEIdK50W+tfnw2lcVThJKmEAOoQG84Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/cabinet_sheet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/cabinet.css') }}">
    <link href="{{asset('assets/app.f39ec460.css')}}" rel="preload" as="style">
    <link href="{{asset('assets/app.f39ec460.css')}}" rel="stylesheet">
    @livewireStyles
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Cabinet - @yield('title')</title>
</head>
<body>
<div id="cabinet" class="container-fluid p-0">
    <div class="loader"><img src="{{asset('assets/images/spinner.svg')}}" alt=""></div>
    <div class="row m-0">
        <div class="col-xl-1 d-xl-block d-none p-0">
            @include('cabinet.new.sidebar',['user'=>$user])
        </div>
        <div class="col-xl-11 col-lg-12 p-0">
            @yield('content')

        </div>
    </div>
</div>
@include('cabinet.new._mobile-nav', ['user'=>$user])
<div aria-live="polite" aria-atomic="true" style="top: 45%; z-index: 1000; flex-direction: column;" class="position-fixed d-flex justify-content-center align-items-center w-100">
@foreach($user->notifications as $notif)
        <livewire:notification :notification="$notif" :list="false">
@endforeach
</div>
<script src="{{asset('assets/js/vendors.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/js/iziModal.min.js" integrity="sha512-lR/2z/m/AunQdfBTSR8gp9bwkrjwMq1cP0BYRIZu8zd4ycLcpRYJopB+WsBGPDjlkJUwC6VHCmuAXwwPHlacww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/js/iziModal.js" integrity="sha512-1J0h9sFPFsywGN1ZMdHRX7n94nW1lvmX+yNAqcsSJSdayFsGE935ginqQ31R6rwxarOKG7j//Km5SB6cOT8aUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $("#modal").iziModal();
</script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@livewireScripts
@tawk
<script>
    const createPaymentFiat = document.getElementById("createPaymentFiat");
    createPaymentFiat.addEventListener("submit", (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        $.ajax({
            url: "{{route('payment.p2p.create')}}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                    window.location.href = data.url;

            },
            error: function (data) {
                    const errors = data.responseJSON.errors;
                    for (const key in errors) {
                        const error = errors[key];
                        const input = document.getElementById(key);
                        input.classList.add("is-invalid");
                        const div = input.nextElementSibling;
                        div.innerText = error[0];
                }
            }
        })
    });

</script>



</body>
</html>
