<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0e6d2; /* Light beige background */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .signup-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px; /* Sesuaikan lebar sesuai kebutuhan */
        }

        .btn-primary {
            background-color: #a0522d; /* Sienna button */
            border-color: #a0522d;
        }

        .btn-primary:hover {
            background-color: #8c4624;
            border-color: #8c4624;
        }

        .form-label {
            color: #777;
            font-size: 0.9em;
            text-align: left;
        }

        .form-control {
            border: 1px solid #ddd;
        }

        .login-link {
            margin-top: 15px;
            font-size: 0.9em;
            color: #777;
        }

        .login-link a {
            color: #a0522d; /* Sienna link */
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .text-sienna {
            color: #a0522d; /* Kelas kustom untuk warna sienna */
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2 class="mb-4 text-sienna">Sign Up</h2>
        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nama" required autofocus>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Your Password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
        <div class="login-link mt-3">
            Already have an account? <a href="{{ route('login') }}">Log In</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>