<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Case - Liturtara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="bg-gray-100">

    @include('navbar')

    <!-- Hero Section -->
    <div class="relative w-full h-80 bg-cover bg-center mt-10" style="background-image: url('/storage/bgco1.png');">
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end px-8 pb-6">
            <div class="text-white">
                <h1 class="text-3xl font-bold">Layanan Case Owner</h1>
                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
    </div>

    <!-- Form Wrapper -->
    <div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
        <form action="{{ route('casepub.step1') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- STEP 1 -->
            <div id="step1" class="step">
                @include('caseowner.casepub.step1')
            </div>

            <!-- STEP 2 -->
            <div id="step2" class="step hidden">
                @include('caseowner.casepub.step2')
            </div>

            <!-- STEP 3 -->
            <div id="step3" class="step hidden">
                @include('caseowner.casepub.step3')
            </div>

            <!-- STEP 4 -->
            <div id="step4" class="step hidden">
                @include('caseowner.casepub.step4')
            </div>

            <div id="upload" class="step hidden">
                @include('caseowner.casepub.uploadDocument')
            </div>

        </form>
    </div>

    @include('bottom')

</body>

</html>