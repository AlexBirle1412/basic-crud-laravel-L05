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
            <form method="POST" action="{{ url('/products') }}">
                <!-- "{{config('app.url')}}/products">  -->
                @csrf
                <h1>Enter detalis to create products</h1>

                <div class="form-input">
                    <label> Name</label>
                    <input type="text" name="name">
                </div>

                <div class="form-input">
                    <label> Description</label>
                    <input type="text" name="description">
                </div>

                <div class="form-input">
                    <label> Price</label>
                    <input type="text" name="count">
                </div>

                <div class="form-input">
                    <label>Count</label>
                    <input type="text" name="price">
                </div>

                <button type="submit" class="btn btn-success btn-sm">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>