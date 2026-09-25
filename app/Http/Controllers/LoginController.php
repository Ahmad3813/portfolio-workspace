<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\PasswordResetOtp;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }
    public function showForgotPassword()
    {
        return view('auth.forgot-password');
    }
    public function sendOtp(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::where('email', $data['email'])->first();

        if (! $user) {
            return back()
                ->withErrors(['email' => 'No account was found with this email address.'])
                ->onlyInput('email');
        }

        $otp = (string) random_int(100000, 999999);

        PasswordResetOtp::updateOrCreate(
            ['email' => $user->email],
            [
                'otp_hash' => Hash::make($otp),
                'expires_at' => now()->addMinutes(10),
                'attempts' => 0,
            ]
        );

        Mail::raw(
            "Your password reset code is: {$otp}\n\nThis code expires in 10 minutes.",
            function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Your password reset code');
            }
        );

        $request->session()->put('password_reset_email', $user->email);

        return redirect()
            ->route('password.otp.form')
            ->with('status', 'We sent a verification code to your email.');
    }
    public function showOtpForm()
    {
        if (! session('password_reset_email')) {
            return redirect()->route('password.request');
        }

        return view('auth.verify-otp');
    }

    public function verifyOtp(Request $request)
    {
        $data = $request->validate([
            'otp' => ['required', 'digits:6'],
        ]);

        $email = $request->session()->get('password_reset_email');

        if (! $email) {
            return redirect()
                ->route('password.request')
                ->withErrors(['email' => 'Please request a new verification code.']);
        }

        $otpRecord = PasswordResetOtp::where('email', $email)->first();

        if (! $otpRecord || $otpRecord->expires_at->isPast()) {
            return redirect()
                ->route('password.request')
                ->withErrors(['email' => 'This verification code has expired. Please request a new one.']);
        }

        if ($otpRecord->attempts >= 5) {
            return redirect()
                ->route('password.request')
                ->withErrors(['email' => 'Too many incorrect attempts. Please request a new code.']);
        }

        if (! Hash::check($data['otp'], $otpRecord->otp_hash)) {
            $otpRecord->increment('attempts');

            return back()->withErrors([
                'otp' => 'The verification code is incorrect.',
            ]);
        }

        $request->session()->put('password_reset_verified', true);

        return redirect()->route('password.reset.form');
    }
    public function showResetPassword()
{
    if (! session('password_reset_verified')) {
        return redirect()->route('password.request');
    }

    return view('auth.reset-password');
}
public function resetPassword(Request $request)
{
    if (! session('password_reset_verified')) {
        return redirect()->route('password.request');
    }

    $data = $request->validate([
        'password' => [
            'required',
            'confirmed',
            'min:8',
            'regex:/[a-z]/',
            'regex:/[A-Z]/',
            'regex:/[0-9]/',
            'regex:/[^A-Za-z0-9]/',
        ],
    ]);

    $email = session('password_reset_email');

    $user = User::where('email', $email)->firstOrFail();

    $user->update([
        'password' => Hash::make($data['password']),
    ]);

    PasswordResetOtp::where('email', $email)->delete();

    $request->session()->forget([
        'password_reset_email',
        'password_reset_verified',
    ]);

    return redirect()
        ->route('login')
        ->with('status', 'Your password has been reset. Please sign in.');
}
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return back()
            ->withErrors([
                'email' => 'The email or password is incorrect.',
            ])
            ->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
}
