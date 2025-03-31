<html>
<head>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f3f4f6;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            width: 100%;
            max-width: 24rem;
            padding: 1.5rem;
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .title {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
            color: #000000;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            color: #4b5563;
        }
        .form-group input {
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-group input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
        }
        .btn {
            width: 100%;
            padding: 0.5rem 1rem;
            color: #ffffff;
            background-color: #1e3a8a;
            border: none;
            border-radius: 0.375rem;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-bottom: 0.5rem;
        }
        .btn:hover {
            background-color: #1d4ed8;
        }
        .btn i {
            margin-right: 0.5rem;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
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
        <h2 class="title">Forgot Password</h2>
        <form action="{{route('forgetPasswordPost')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email" >Email</label>
                <input type="email" id="email"  name="email" placeholder="Email">
            </div>
            <!-- <button class="btn" type="button">
                <i class="fab fa-google"></i>Create with google
            </button> -->
            <button type="submit" class="btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>