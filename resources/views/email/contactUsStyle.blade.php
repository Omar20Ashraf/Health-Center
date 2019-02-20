<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    
    <h1>Hi admin</h1>
    <p>You have new email from {{ $name }} </p>
    <p>Email:  {{ $email }} </p>
    <p>phone Number:  {{$phone_number}}</p>
    <p>The Appointment Date:  {{ $select_date }} </p>
    <p>The Department:  {{ $select_department }} </p>
    
    <hr />
    <p>Additional message is:<br>
        {{ $additional_message }}
    </p>
    
</body>
</html>