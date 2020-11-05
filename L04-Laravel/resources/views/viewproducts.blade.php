<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">


<head>
    <title> View Products | Product Store</title>
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Here is a list of available products</h1>
        <table class="table table-bordered">
            <thead>
                <td>Name</td>
                <td>Description</td>
                <td>Count</td>
                <td>Price</td>
                <td> <a href="{{route('products.create')}}" class="btn btn-success btn-sm">
                        <i class="glyphicon glyphicon-plus"></i>
                    </a></td>
            </thead>
            <tbody>
                @foreach ($allProducts as $product)
                <tr>
                    <!-- <td>{{$product->id}}</td> -->
                    <td>{{$product->name}}</td>
                    <td class="inner-table">{{$product->description}}</td>
                    <td class="inner-table">{{$product->count}}</td>
                    <td class="inner-table">{{$product->price}}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{route('products.edit',$product->id)}}">
                            Edit
                            <i class="glyphicon glyphicon-th-large"></i></a>
                        <a class="btn btn-primary btn-sm" href="{{route('products.show',$product->id)}}">
                            Show
                            <i class="glyphicon glyphicon-pencil"></i></a>

                        <a class="btn btn-danger btn-sm" href="{{route('products.destroy',$product->id)}}">
                            Delete
                            <i class="glyphicon glyphicon-pencil"></i></a>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<body>

</body>

</html>