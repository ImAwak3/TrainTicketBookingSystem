
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Ayush Panta">
	<meta http-equiv="X-UA-Compatible" content="IR=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>


<body class="bg-dark" background="{{ URL::asset('img/background.jpg'); }}">

    <div class="container" style="margin: auto; width: 50%;">
        <!-- Content here -->
        <div class="row" style="margin: 100px auto; width: 50%;">
            <div class="col">
                <img src="{{ URL::asset('img/logo/logo.png'); }}" alt="">

                @guest
                @if (Route::has('login'))
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </div>

                @endif
<br><br>
                @if (Route::has('register'))
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                </div>
                @endif
                @else
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
      </div>
      
</body>
</html>
