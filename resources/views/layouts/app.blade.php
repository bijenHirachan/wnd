<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Wings and Dumplings takeaway restaurant in Zeelstraat 6, 3000 Leuven, Belgium.">
  <meta name="keywords" content="Wings, Wings And Dumplings, Wings and dumplings, Oude Markt, Wings & Dumplings, Zeelstraat, Zeelstraat 6, Leuven centrum, Leuven center, Dumplings, Momo, Mo:Mo, Takeaway, Nepali momo, Leuven, Belgium, Restaurant, Food, Buffalo Wings, Korean Spicy Wings, Loempia, Chicken momo, Pork momo, Pork dumplings, Chicken dumplings, Chowmein, Spring rolls, Frieten, Fries, Chicken wings, Asian Cuisine">
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