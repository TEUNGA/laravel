<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
          
    </head>
      
    <body class="antialiased">
    <p>Bienvenue <br>
    Aujourd'hui c'est <br>
    {{$date}}
    <a href="/services">
    <input type ="button" value ="next">
    </a>
     </p>
