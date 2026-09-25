<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Portfolio Workspace</title>

    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
</head>
<body>
    <main class="forgot-page">
        <section class="forgot-intro">
            <a href="{{ route('login') }}" class="forgot-brand">
                <span class="forgot-brand-logo">A.</span>
                <span>Portfolio Workspace</span>
            </a>

            <div class="forgot-intro-content">
                <p class="forgot-eyebrow">PASSWORD RECOVERY</p>
                <h1>Reset your password.</h1>
                <p>
                    Enter your email address and we will send you a one-time
                    verification code.
                </p>
            </div>

            <p class="forgot-intro-footer">© 2026 Portfolio Workspace</p>
        </section>

        <section class="forgot-area">
            <div class="forgot-card">
                <a href="{{ route('login') }}" class="back-to-login">
                    ← Back to sign in
                </a>

                <h2>Forgot password<span>?</span></h2>
                <p>Enter the email connected to your account.</p>

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="forgot-form-row">
                        <label for="email">Email address</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="you@example.com"
                            required
                        >
                    </div>

                    <button type="submit" class="forgot-button">
                        Send verification code
                    </button>
                </form>

                <p class="forgot-help">
                    Remembered your password?
                    <a href="{{ route('login') }}">Sign in</a>
                </p>
            </div>
        </section>
    </main>
</body>
</html>