<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        {{-- @dump($errors) --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
                </ul>

            </div>
        @endif --}}
        <h1>Basic Form</h1>
        <form action="{{ route('form3_submit') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control @error('name')
                is-invalid @enderror" value="{{ old('name') }}"/>
                @error('name')
                    <small class="invalid-feedback"> {{ $message }} </small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control @error('email')
                is-invalid @enderror" value="{{ old('email') }}"/>
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" autocomplete="new-password" class="form-control @error('password')
                    is-invalid
                @enderror"/>
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password" class="form-control">
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="text" name="age" placeholder="Age" class="form-control @error('age')
                is-invalid @enderror" value="{{ old('age') }}"/>
                @error('age')
                    <small class="invalid-feedback"> {{ $message }} </small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Bio</label>
                <textarea type="text" name="bio" placeholder="Bio" class="form-control @error('bio')
                is-invalid @enderror">{{ old('bio') }}</textarea>
                @error('bio')
                    <small class="invalid-feedback"> {{ $message }} </small>
                @enderror
            </div>
            <div class="text-center">
                <button class="btn btn-success w-25">Send</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
