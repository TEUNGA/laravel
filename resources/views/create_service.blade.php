<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body class="antialiased">
    <p>
    <table>
    <form method ="post" action ="{{ route('service.store') }}">
    @csrf
    <tr>
    <td> Nom: <input type="text" name="nom" id="nom" required>  </td>
    <tr>
    <tr> 
    <td> description: <textarea name="description" id="description"></textarea> </td>
    </tr>
    <tr> <td> <button type="submit"  name="save">Save</button> </td>
    </tr>
    </form>
    </table>
   
