<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    @include('inc.header')
    @if(Request::is('/'))
        @include('inc.banner')
    @endif

    

    <div class="container">
        @include('inc.messages')
        <div class="row mt-5">
            <div class="col-4"> 
                @include('inc.aside')
            </div>
            <div class="col-8"> 
                @yield('home')
                @yield('about')
                @yield('contact')
                @yield('messages')
                @yield('oneMessage')
                @yield('updateMessage')
            </div>   
        </div>  
    </div>
   @include('inc.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>