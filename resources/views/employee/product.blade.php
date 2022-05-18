<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Form to create Product</h2>
    <form action="{{route('employee.done')}}" method="post">
        @csrf
        <label for="">Name:</label>
        <input type="text" name="name" id="name" placeholder="name"><br>
        <label for="">Price:</label>
        <input type="number" name="price" id="price" placeholder="price"><br>
        <label for="">Stock:</label>
        <input type="text" name="stock" id="stock" placeholder="stock"><br>
        <label for="">Image:</label>
        <input type="file" name="image" placeholder="image"><br>
        <label for="">Description</label>
        <textarea type="text" name="description" id="description" colspan="10" rowspan="10"></textarea>
       <br>
        <input type="submit">

    </form>
</body>
</html>