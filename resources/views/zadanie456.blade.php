<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($array as $item)
    <li style="font-size: 25px; color: tomato;text-align: center">Что - {{$item}}</li>
@endforeach
<hr>
@foreach($array as $item)
    <div style="text-align: center;color: brown;font-size: 25px"> Что-{{$item}}</div>
@endforeach
<hr>
@foreach($number as $num)
    @if($num%2==0)
        <div style="text-align: center">
            <span style="text-align: center;color: brown;font-size: 25px">{{$num}}<br></span>
        </div>
    @endif
@endforeach
</body>
</html>
