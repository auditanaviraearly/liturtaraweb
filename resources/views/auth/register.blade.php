<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Liturtara</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css'])
</head>
<body class="auth-container">

    <div class="auth-box">
        <!-- Bagian Kiri: Gambar -->
        <div class="auth-image space-x-6">
            <img src="{{ asset('storage/loginimg.png') }}" alt="Welcome Image" 
                 class="w-3/4" style="transform: scale(2.0) translateY(50px);">
        </div>

        <!-- Bagian Kanan: Form -->
        <div class="auth-form">
            <div class="auth-logo">
                <img src="{{ asset('storage/liturtaralogo.svg') }}" alt="Liturtara Logo" class="h-10">
            </div>
            <h2 class="auth-title">Account Registration</h2>

            <form action="{{ route('register') }}" method="POST" onsubmit="return document.getElementById('terms').checked;" class="fade-in">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-600">Email</label>
                    <input type="email" name="email" class="auth-input" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600">Phone Number</label>
                    <input type="text" name="phone" class="auth-input" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600">Password</label>
                    <input type="password" name="password" class="auth-input" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="auth-input" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600">Account Category</label>
                    <select name="account_category" class="auth-input" required>
                        <option value="">-- Select Category --</option>
                        <option value="case_owner">Case Owner</option>
                        <option value="talent_researcher">Talent Researcher</option>
                    </select>
                </div>  

                <!-- Checkbox Syarat & Ketentuan -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="terms" name="terms" class="w-5 h-5" required>
                    <label for="terms" class="ml-2 text-sm text-gray-600">
                        Saya menyetujui 
                        <a href="{{ route('termsconditions') }}" target="_blank" class="text-blue-500 hover:underline">Terms and Conditions</a> 
                        dan 
                        <a href="{{ route('termsconditions') }}" target="_blank" class="text-blue-500 hover:underline">Privacy Policy</a>.
                    </label>
                </div>

                <!-- Checkbox PDP -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="pdp" name="pdp" class="w-5 h-5">
                    <label for="pdp" class="ml-2 text-sm text-gray-600">
                        I Agree <a href="#" class="text-blue-500 hover:underline">Personal Data Protection Act</a>
                    </label>
                </div>

                <button type="submit" class="auth-button">Register</button>
            </form>

            <p class="text-center mt-4 text-gray-600">
                Already have an account? <a href="{{ route('login') }}" class="auth-link">Login</a>
            </p>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector(".fade-in").classList.add("show");
        });
    </script>

</body>
</html>
