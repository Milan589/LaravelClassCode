<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff</title>
</head>
<body>
    <h2>Form to create Staffs</h2>
    <form action="{{route('employee.file')}}" method="post">
        @csrf
        <label for="">Name:</label>
        <input type="text" name="name" id="name" placeholder="name"><br>
        <label for="">Address:</label>
        <input type="text" name="address" id="address" placeholder="address"><br>
        <label for="">Email:</label>
        <input type="text" name="email" id="email" placeholder="email"><br>
        <label for="">Phone:</label>
        <input type="text" name="phone" id="phone" placeholder="phone"><br>
        <input type="submit">

    </form>
</body>
</html>