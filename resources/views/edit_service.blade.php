<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body class="antialiased">
    <p>
    <table>
    <form method ="post" action ="{{ route('service.update') }}">
    @csrf
    @method ('Put')

    <tr>
    <td> Nom: <input type="text" name="name" id="name" required>  </td>
    <tr>
    <tr> 
    <td> description: <textarea name="description" id="description"></textarea> </td>
    </tr>
    <tr> <td> <button type="submit"  name="edit">Edit</button> </td>
    </tr>
    </form>
    </table>
   
