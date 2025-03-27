<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            gap: 20px;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 100%;
        }

        .form-section {
            flex: 1;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        .form-footer {
            margin-top: 15px;
            font-size: 14px;
            text-align: center;
        }

        .form-footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .form-footerartist {
            margin-top: 15px;
            font-size: 14px;
            text-align: center;
        }

        .form-footerartist a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form-footerartist a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        
        <!-- Left Register Form -->
        <div class="form-section">
            <div class="form-container">
                <h2>Create your account</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                    </div>

                    <button type="submit" class="submit-btn">Create an Account</button>

                    <div class="form-footer">
                        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                    </div>

                    <div class="form-footerartist">
                        <p>Want to be an artist? <a href="">Create artist acc here</a></p>
                    </div>
                    
                 </form>
            </div>
        </div>
    </div>

</body>
</html>
