<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
    <p> 
    Our Core Services <br>
    are as follows: <br>
    
    @foreach ($services as $service)
    <ul>
    <li><a href ="/service/{{ $service->id}}"> {{ $service->nom }}  </a> </li>
    </ul> 
    
@endforeach
<a href='/create_service'><input type ="button" value="Add a service"> </a>
    </p>
    <a href='/create_class'><input type ="button" value="create new"> </a>
    </p>
    <a href='/edit_service/{$id}'><button type ="submit" value="Edit service">
    Edit service </button>
     </a>
    </p>
