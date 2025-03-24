

<!-- Inline CSS for styling -->
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

    /* Form container */
    .form-section {
        background-color: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    /* Form heading */
    .form-container h2 {
        font-size: 24px;
        margin-bottom: 20px;
        font-weight: bold;
    }

    /* Input fields */
    .form-group {
        margin-bottom: 20px;
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
        margin-top: 20px;
        font-size: 14px;
    }

    .form-footer a {
        color: #4CAF50;
        text-decoration: none;
    }

    .form-footer a:hover {
        text-decoration: underline;
    }

    .error {
        color: red;
        font-size: 12px;
    }
</style>

<section class="form-section">
    <div class="form-container">
        <h2>Log in</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf


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
                <button type="submit" class="submit-btn">Sign in </button>
                
            </div>

            <div class="form-footer">
                <p>Dont have an account? <a href="{{ route('register') }}">Register Here</a></p>
                <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
            </div>
        </form>
    </div>
</section>


