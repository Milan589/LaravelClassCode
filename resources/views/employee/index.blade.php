<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff</title>
</head>
<body>
<h1>Employee List</h1>
<table border="1" width="100%">
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th>DOB</th>
        <th>Image</th>
        <th>Created_Date</th>
        <th>Updated_Date</th>
    </tr>
    @foreach ($data as $d)
        <tr>
            <th>{{$d->id}}</th>
            <th>{{$d->name}}</th>
            <th>{{$d->adddress}}</th>
            <th>{{$d->email}}</th>
            <th>{{$d->phone}}</th>
            <th>{{$d->dob}}</th>
            <th>{{$d->image}}</th>
            <th>{{$d->created_at}}</th>
            <th>{{$d->updated_at}}</th>
        </tr>  
    @endforeach

</table>
{{$data->links()}}
</body>
</html>