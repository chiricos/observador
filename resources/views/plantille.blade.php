<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
 
   
    {!! Html::style('css/bootstrap/bootstrap.min.css') !!}
    {!! Html::style('css/bootstrap/bootstrap-theme.min.css') !!}
    {!! Html::style('css/style.css') !!}

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body>

@include('Complements.menu')
<figure class="logo">
{!! HTML::image('images/logo.png','',array('id'=>'logo')) !!}
</figure>
@yield('content')
@yield('scripts')
</body>
</html>