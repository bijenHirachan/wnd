<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wings and Dumplings</title>
@vite('resources/css/app.css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="icon" type="image/x-icon" href="/img/favicon.ico">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
  *,html,body {
    font-family: 'Jost', sans-serif;
    scroll-behavior: smooth;
  }
  .bg{
    background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/background.webp');
    background-position:center top;
  }
  </style>
  @livewireStyles
</head>
<body class="bg-gray-100">



<x-navbar/>

@yield('content')







<x-footer/>


</body>
@livewireScripts()
</html>