<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Code | Portfolio Workspace</title>

    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
</head>

<body>
    <main class="verify-page">
        <section class="verify-intro">
            <a href="{{ route('login') }}" class="verify-brand">
                <span class="verify-brand-logo">A.</span>
                <span>Portfolio Workspace</span>
            </a>

            <div class="verify-intro-content">
                <p class="verify-eyebrow">EMAIL VERIFICATION</p>
                <h1>Check your inbox.</h1>
                <p>
                    We sent a six-digit verification code to your email address.
                </p>
            </div>

            <p class="verify-intro-footer">© 2026 Portfolio Workspace</p>
        </section>

        <section class="verify-area">
            <div class="verify-card">
                <a href="{{ route('password.request') }}" class="back-to-forgot">
                    ← Use another email
                </a>

                <h2>Enter your code<span>.</span></h2>

                <p>
                    Enter the six-digit code sent to
                    <strong>{{ session('password_reset_email') }}</strong>.
                </p>

                @if (session('status'))
                <p class="otp-status">{{ session('status') }}</p>
                @endif

                <form action="{{ route('password.otp.verify') }}" method="POST">
                    @csrf
                    <div class="verify-form-row">
                        <label for="otp">Verification code</label>

                        <input
                            type="text"
                            id="otp"
                            name="otp"
                            inputmode="numeric"
                            maxlength="6"
                            placeholder="000000"
                            required>
                    </div>


                    <button type="submit" class="verify-button">
                        Verify code
                    </button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>