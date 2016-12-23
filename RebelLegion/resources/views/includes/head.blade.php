<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

{{-- Yay. -Yoan --}}
<title>Foundation Starter Template</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Styles -->
<link rel="stylesheet" href={{asset('css/foundation-icons.css')}} />
<link rel="stylesheet" href={{asset('css/app.css')}} />
<link rel="stylesheet" href={{asset('css/custom.css')}} />

{{-- Superbe... -Yoan --}}
<!-- les 2 css ci-dessous sont les même, (on utilise le 1er pour développer en local)-->
<link rel="stylesheet" href={{asset('css/motion-ui.css')}} />
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.min.css" />
-->

<!-- Scripts -->
<script>
  window.Laravel =
  @php
    echo json_encode([
        'csrfToken' => csrf_token(),
    ]);
  @endphp
</script>

<script src={{asset('js/jquery.js')}}></script>
