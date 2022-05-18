<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
<h1>Product List</h1>
<table border="1" width="100%">
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Image</th>
        <th>Description</th>
        <th>Created_Date</th>
        <th>Updated_Date</th>
    </tr>
    @foreach ($data1 as $d1)
        <tr>
            <th>{{$d1->id}}</th>
            <th>{{$d1->name}}</th>
            <th>{{$d1->price}}</th>
            <th>{{$d1->stock}}</th>
            <th>{{$d1->image}}</th>
            <th>{{$d1->description}}</th>
            <th>{{$d1->created_at}}</th>
            <th>{{$d1->updated_at}}</th>
        </tr>  
    @endforeach

</table>
{{$data1->links()}}
</body>
</html>