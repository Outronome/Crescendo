<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email</title>
    <style>
        body {
            background-color: #111827;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #1f2937;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }
        h2 {
            font-size: 22px;
            margin-bottom: 10px;
        }
        p {
            font-size: 14px;
            color: #d1d5db;
            margin-bottom: 20px;
        }
        .alert {
            background-color: #22c55e;
            color: white;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        input[type="checkbox"] {
            margin-right: 10px;
        }
        .button {
            background-color: #3b82f6;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #2563eb;
        }
        a {
            color: #60a5fa;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        <img src="{{ asset('assets/img/Crescendo_symbol.png') }}" alt="Crescendo Logo">
        <span>Crescendo</span>
    </div>
    <h2>Verify Your Email Address</h2>
    <p>Before proceeding, please check your email for a verification link. If you did not receive the email, you can request a new one.</p>

    @if (session('resent'))
        <div class="alert">
            A fresh verification link has been sent to your email address.
        </div>
    @endif

    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="button">Click here to request another</button>
    </form>
</div>

</body>
</html>