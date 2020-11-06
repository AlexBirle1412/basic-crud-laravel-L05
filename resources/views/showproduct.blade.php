<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">


<head>
    <title> Show this products | Product Store</title>
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
    <h2>
        Acestea sunt caracteristicile produsului
    </h2>
    <table class="table table-bordered">

        <tr>

            <td class="inner-table">{{$prod->name}}</td>
            <td class="inner-table">{{$prod->description}}</td>
            <td class="inner-table">{{$prod->count}}</td>
            <td class="inner-table">{{$prod->price}}</td>

        </tr>

    </table>

    <form method="GET" action="{{ url('/products') }}">
        <!-- "{{config('app.url')}}/products">  -->
        @csrf
        <button type="submit" class="btn btn-success btn-sm">Retrun to home page</button>
    </form>

</body>

</html>