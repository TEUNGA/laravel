<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
    <p> 
    @foreach ($services as $service)
     {{ $service->description }}  
        
@endforeach
        <a href="/services">
        <input type="button" value="back">
        
        </a>

     </p> 
     