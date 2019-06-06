<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h3>Login Dahulu</h3>
    <a href="http://localhost/laraip/">Kembali</a>
    <br/><br/>
    @section('content')
    	<form method="POST" action="{{route('post.login')}}">
        {!! csrf_field() !!}

            Email <br/>
            <input type="email" name="email" required="required" placeholder="Email"><br/>
                
            Password <br/>
            <input type="password" name="password" required="required" placeholder="Password"><br/>
            
            <button>
                Login
            </button><br/>

                Dosen<br/>
                email : agus@dosen.com<br/>
                password : 1234567<br/>
                ---<br/>
                Mahasiswa<br/>
                email : eko@mahasiswa.com<br/>
                password : 123456<br/>

                <a href="#">
                    Sign Up
                </a>
        </form>
</body>
</html>