<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div style="width: 400px;height:400px;border:1px solid;margin:10px auto;">
        <div style="height:30px;width:auto;background-color:green;margin:0px;">
            <h3 align="center" style="color:white;">User Activation</h3>
        </div>
        <br>
        <div align="center">
            <form action="/activationction" method='POST'>
                    @csrf
                <input type="text" name="name" placeholder="Name"><br><br>
                <input type="text" name="mobile" placeholder="Mobile"><br><br>
                <input type="text" name="email" placeholder="Email"><br><br>
                <input type="text" name="sponser" placeholder="Sponser ID"><br><br>
                <input type="text" name="amount" placeholder="Product Amount"><br><br>
                <input type="hidden" name="userCode" value="{{$userCode}}" placeholder="Product Amount">
                <input type="submit" value="Submit">
            </form>
        </div>
@if (session()->has('Renewmsg'))

{{session('Renewmsg')}}
    
@endif
@if (session()->has('newmsg'))

{{session('newmsg')}}
    
@endif


    </div>
    
</body>
</html>