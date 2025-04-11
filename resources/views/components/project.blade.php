<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomplishments Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .stats-card {
            background: linear-gradient(180deg, #fce8df 0%, #e6f0ff 100%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-white font-sans">
    <div class="container mx-auto px-4 py-16 max-w-6xl">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <p class="text-green-500 text-lg font-medium mb-3">Excellence</p>
            <h2 class="text-3xl font-bold text-gray-900">Accomplishments that keep us going</h2>
        </div>

        <!-- First Row - 3 Cards -->
        <div class="flex flex-wrap justify-center gap-8 mb-8">
            <!-- Years Card -->
            <div class="stats-card w-64 h-32 rounded-lg p-8 flex flex-col justify-center items-center">
                <h3 class="text-4xl font-bold text-gray-800 mb-1">10+</h3>
                <p class="text-gray-600">Team Members</p>
            </div>

            <!-- Countries Card -->
            <div class="stats-card w-64 h-32 rounded-lg p-8 flex flex-col justify-center items-center">
                <h3 class="text-4xl font-bold text-gray-800 mb-1">20+</h3>
                <p class="text-gray-600">Project Complete</p>
            </div>

            <!-- Repeat Clients Card -->
            <div class="stats-card w-64 h-32 rounded-lg p-8 flex flex-col justify-center items-center">
                <h3 class="text-4xl font-bold text-gray-800 mb-1">90%</h3>
                <p class="text-gray-600">Repeat Clients</p>
            </div>
        </div>

        <!-- Second Row - 2 Cards -->
        <div class="flex flex-wrap justify-center gap-8">
            <!-- Customers Card -->
            <div class="stats-card w-64 h-32 rounded-lg p-8 flex flex-col justify-center items-center">
                <h3 class="text-4xl font-bold text-gray-800 mb-1">20+</h3>
                <p class="text-gray-600">Customers</p>
            </div>

            <!-- Technocrats Card -->
            <div class="stats-card w-64 h-32 rounded-lg p-8 flex flex-col justify-center items-center">
                <h3 class="text-4xl font-bold text-gray-800 mb-1">100%</h3>
                <p class="text-gray-600">Success Rate</p>
            </div>
        </div>
    </div>
</body>
</html>