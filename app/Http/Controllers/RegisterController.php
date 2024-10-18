<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function __construct(
      protected UserRepository $userRepository
    ) {

    }

    public function index(): View
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if ($credentials) {
            $user = $this->userRepository->createUser($credentials);

            Auth::login($user);

            return redirect()->route('home')->with('success', 'Registration successful! Welcome.');
        }

        return back()->withErrors([
            'registration_failed' => 'Registration failed. Please try again.',
        ])->withInput($request->except('password'));
    }
}
