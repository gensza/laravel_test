<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center">Registrasi</h2>
            <hr>

            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control" id="">
                        <option value="owner">Owner</option>
                        <option value="staff">Staff</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Registrasi</button>

                <hr>
                <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
            </form>
        </div>
    </div>
</body>

</html>