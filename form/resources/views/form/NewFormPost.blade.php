<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        @if(session('status'))
        <div>XDXD</div>
        {{ session('status')}}

        @endif
    <form name="NewFormPost" id="NewFormPost" method="post" action="{{url('store-form')}}">
        @csrf
        @method('GET')
        @auth

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div>
            <label for="description">Description</label>
            <input   name="description" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
    @else
    <p>You must be logged in to submit the form. <a href="{{ route('login') }}">Login</a></p>
    @endauth
    </body>
</html>
