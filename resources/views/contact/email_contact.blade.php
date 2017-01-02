<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    </head>
    <body>
        <h2>Contact D.E V</h2>
        <p>Someone send a contact email on D.E V with the following :</p>
        <ul>
            <li><strong>Name  : </strong>{{ $name }} </li>
            <li><strong>Email : </strong>{{ $email }}</li>
            @if($need)
            <li><strong>Need  : </strong>{{ $need }}</li>
            @endif
        </ul>
        <p><strong>Message : </strong>{{ $text }}</p>
    </body>
</html>