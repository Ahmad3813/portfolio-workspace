<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password | Portfolio Workspace</title>

    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
</head>

<body>
    <main class="reset-page">
        <section class="reset-intro">
            <a href="{{ route('login') }}" class="reset-brand">
                <span class="reset-brand-logo">A.</span>
                <span>Portfolio Workspace</span>
            </a>

            <div class="reset-intro-content">
                <p class="reset-eyebrow">PASSWORD RESET</p>
                <h1>Create a new password.</h1>
                <p>
                    Choose a strong password to keep your account protected.
                </p>
            </div>

            <p class="reset-intro-footer">© 2026 Portfolio Workspace</p>
        </section>

        <section class="reset-area">
            <div class="reset-card">
                <h2>New password<span>.</span></h2>
                <p>Enter and confirm your new password below.</p>

                <form action="{{ route('password.reset') }}" method="POST">
                    @csrf
                    <div class="reset-form-row">
                        <label for="password">New password</label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            minlength="8"
                            pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}"
                            title="Use at least 8 characters, an uppercase letter, a lowercase letter, a number, and a symbol."
                            placeholder="Enter a new password"
                            required>

                        <small class="password-rules">
                            Use at least 8 characters, uppercase and lowercase letters,
                            a number, and a symbol.
                        </small>
                    </div>

                    <div class="reset-form-row">
                        <label for="password_confirmation">Confirm password</label>

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Enter the password again"
                            required>
                    </div>

                    <button type="submit" class="reset-button">
                        Save new password
                    </button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>