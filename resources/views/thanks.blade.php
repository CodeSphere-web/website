<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Ensure your Tailwind script or Vite directive is here -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Thank you!</h1>
        <p class="text-gray-600 mb-6">We have received your message and will chat with you soon.</p>
        <a href="https://codespherelb.com/#projects" 
           class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">
            Back to Projects
        </a>
    </div>
</body>
</html>