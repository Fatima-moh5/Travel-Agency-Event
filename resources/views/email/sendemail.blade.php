<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
<h1>{{ $title }}</h1>
<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td>{{$first_name}} {{$middle_name}} {{$last_name}}</td>
    </tr>
    <tr>
        <td>Trip</td>
        <td>{{$trip}} </td>
    </tr>
    <tr>
        <td>Nationality</td>
        <td>{{$nationality}} </td>
    </tr>
    <tr>
        <td>Passport Number</td>
        <td>{{$passport_num}} </td>
    </tr>
    <tr>
        <td>Passport Expiry Date</td>
        <td>{{$passport_exiration}} </td>
    </tr>
    <tr>
        <td>Area Code</td>
        <td>{{$code}} </td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td>{{$phone}} </td>
    </tr>
</table>

<p>Thank you</p>
</body>
</html>
