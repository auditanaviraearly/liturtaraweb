<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Liturtara</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css'])
</head>
<body class="auth-container">
    <div class="auth-box flex items-center gap-x-10">
        <!-- Bagian Kiri: Gambar -->
        <div class="auth-image">
            <img src="{{ asset('storage/loginimg.png') }}" alt="Welcome Image" 
                class="w-3/4" style="transform: scale(2.0) translateY(50px);">
        </div>

        <!-- Bagian Kanan: Form -->
        <div class="auth-form flex-col justify-center px-12">
            <div class="auth-logo">
                <img src="{{ asset('storage/liturtaralogo.svg') }}" alt="Liturtara Logo" class="h-10">
            </div>
            <h2 class="auth-title text-left text-2xl font-semibold mb-6">Login Account</h2>

            <form action="{{ route('dashboardco') }}" method="GET" class="fade-in">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-600">Email</label>
                    <input type="email" name="email" class="auth-input" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600">Password</label>
                    <input type="password" name="password" class="auth-input" required>
                </div>
                <button type="submit" class="auth-button">Login</button>
                
                <div class="w-full flex justify-center mt-6">
                    <span class="mt-4 text-gray-600">or</span>
                </div>

                <div class="w-full flex justify-center mt-4">
                    <button type="button" 
                        onclick="window.location.href='/auth/google'" 
                        class="auth-button-google mt-4 flex items-center justify-center gap-3">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" 
                            alt="Google Logo" class="h-5 w-5">
                        <span>Login with Google</span>
                    </button>
                </div>
            </form>

            <p class="text-center mt-4 text-gray-600">
                <a href="{{ route('forgotpass') }}" class="auth-link">Forgot Password?</a>
            </p>
            <p class="text-center mt-4 text-gray-600">
                <a href="{{ route('newpass') }}" class="auth-link">New Password?</a>
            </p>
            <p class="text-center mt-4 text-gray-600">
                Don't have an account yet? <a href="{{ route('register') }}" class="auth-link">Register</a>
            </p>
        </div>
    </div>

    <script>
        // Animasi fade-in
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector(".fade-in").classList.add("show");
        });
    </script>
</body>
</html>
