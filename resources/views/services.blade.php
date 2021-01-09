<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
    <p> 
    <a href='/create_service'><input type ="button" value="Add a service"> </a> <br> <br>
    Our Core Services <br>
    are as follows: <br>
    
   
    
     
    @each('edit_service_details', $services,'service')
    
    


    
    