<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Foundation Starter Template</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Styles -->

<link rel="stylesheet" href="/css/foundation-icons.css" />
<link rel="stylesheet" href="/css/app.css" />
<link rel="stylesheet" href="/css/custom.css" />

<!-- les 2 css ci-dessous sont les même, (on utilise le 1er pour développer en local)-->
<link rel="stylesheet" href="/css/motion-ui.css" />
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.min.css" />
-->

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>

<script src="/js/jquery.js"></script>
