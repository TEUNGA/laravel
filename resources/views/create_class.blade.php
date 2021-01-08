<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body>
    <p>
    <table>
    <form method ="post" action ="">
    <tr>
    <td> Nom: <input type="text" name="name" required>  </td>
    <tr>
    <tr> 
    <td> classe: <input type="text" name="class"> </td>
    </tr>
    <tr> <td> <input type="button" value="Save" name="save"> </td>
    </tr>
    </form>
    </table>
