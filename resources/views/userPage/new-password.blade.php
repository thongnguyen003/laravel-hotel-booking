<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: white;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .input-icon {
            position: relative;
        }
        .input-icon input {
            padding-left: 30px;
        }
        .input-icon i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #ccc;
        }
        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #1a3b8b;
            color: white;
            margin-bottom: 20px;
        }
        .btn-primary:hover {
            background-color: #162e6b;
        }
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin-bottom: 20px;
        }
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ccc;
        }
        .divider:not(:empty)::before {
            margin-right: .25em;
        }
        .divider:not(:empty)::after {
            margin-left: .25em;
        }
        .btn-secondary {
            background-color: white;
            color: #1a3b8b;
            border: 1px solid #1a3b8b;
        }
        .btn-secondary:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <div class="ms-auto me-auto mt-5" style="width: 500px">
            <div class="mt-5">
                @if($errors->any())
                    <div class="col-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            </div>
        </div>
        <form action="{{route('reset-passwordPost')}}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{$token}}">
            
            <div>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email">
            </div>
            
            <div>
                <label for="new-password">New password</label>
                <div class="input-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="new-password" name="password" placeholder="Enter new password">
                </div>
            </div>
            <div>
                <label for="confirm-password">Confirm new password</label>
                <div class="input-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="confirm-password" name="password_confirmation" placeholder="Confirm your password">
                </div>
            </div>
            
            <button type="submit" class="btn-primary">Update your password</button>
        </form>
        <div class="divider">Or</div>
        <button class="btn-secondary">Create an account</button>
    </div>
</body>
</html> 

