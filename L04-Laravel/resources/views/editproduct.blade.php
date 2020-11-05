<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">


<head>
    <title> Create Product| Product Store</title>
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>

    <div class="flex-center position-ref full-height">
        <div class="content">

            <form method="PATCH" action="{{ url('/products/<?php echo $prod->id; ?>') }}">

                <!-- "{{config('app.url')}}/products">  -->
                @csrf
                <h1>Modify this product</h1>

                <div class="form-input">
                    <label> Name</label>
                    <input type="text" name="name" placeholder="{{$prod->name}}">
                </div>

                <div class="form-input">
                    <label> Description</label>
                    <input type="text" name="description" placeholder="{{$prod->description}}">
                </div>

                <div class="form-input">
                    <label> Price</label>
                    <input type="text" name="count" placeholder="{{$prod->price}}">
                </div>

                <div class="form-input">
                    <label>Count</label>
                    <input type="text" name="price" placeholder="{{$prod->count}}">
                </div>

                <button type="submit" class="btn btn-success btn-sm">Save and return</button>
            </form>

        </div>
    </div>
</body>

</html>