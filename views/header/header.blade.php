<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>
        @isset($Title)
            {{ $Title }}
        @endisset
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png"
        href="{{ asset('assets/images/logos/favicon.png') }}" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">




    <!-- Meta Description -->
    @isset($Description)
        <meta name="description" content="{{ $Description }}">
    @endisset

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Robots -->

    <meta name="robots" content="index, follow">


</head>

<body>

</body>

</html>
