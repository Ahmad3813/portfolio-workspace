<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Portfolio Workspace</title>

    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
</head>

<body>
    <main class="login-page">
        <section class="login-intro">
            <div class="login-brand">
                <div class="login-brand-icon">A.</div>
                <span>Portfolio Workspace</span>
            </div>

            <div class="login-intro-content">
                <p class="login-eyebrow">WELCOME BACK</p>
                <h1>Your portfolio starts here.</h1>
                <p>
                    Sign in to manage your skills, projects, blogs, and contact details.
                </p>
            </div>

            <p class="login-intro-footer">© 2026 Portfolio Workspace</p>
        </section>

        <section class="login-area">
            <div class="login-card">
                <h2>Sign in<span>.</span></h2>
                <p>Welcome back. Please enter your details.</p>

                <div class="test-account">
                    <strong>Test account</strong>
                    <p>Email: ahmad@test.com</p>
                    <p>Password: Password@123</p>
                </div>

                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <div class="login-form-row">
                        <label for="email">Email address</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="you@example.com"
                            required>
                    </div>
                    @error('email')
                    <small class="login-error">{{ $message }}</small>
                    @enderror

                    <div class="login-form-row">
                        <div class="login-password-label">
                            <label for="password">Password</label>
                            <a href="#" class="forgot-password">Forgot password?</a>
                        </div>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            minlength="8"
                            pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}"
                            title="Password must contain at least 8 characters, an uppercase letter, a lowercase letter, a number, and a symbol."
                            oninvalid="this.setCustomValidity('Password must have 8 characters, uppercase and lowercase letters, a number, and a symbol such as @ or #.')"
                            oninput="this.setCustomValidity('')"
                            required>
                        <small class="password-rules">
                            Use at least 8 characters, uppercase and lowercase letters, a number, and a symbol.
                        </small>
                    </div>

                    <label class="remember-row">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>

                    <button type="submit" class="login-button">
                        Sign In
                    </button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>