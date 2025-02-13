
<!DOCTYPE html>
<hlang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Link to Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="./Stylesheet/style.css" rel="stylesheet"> <!-- Your custom stylesheet -->

    <!-- FontAwesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body class="bg-gray-100 text-gray-800"></body>

<section id="skills" class="py-20 bg-gray-50">
    <div class="container mx-auto text-center px-4">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">My Skills</h2>
        <p class="text-lg text-gray-700 mb-12">Here are some of the technical skills I've acquired and the ones I'm currently learning.</p>

        <!-- Skill Card -->
        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="flex justify-between items-center">
                <!-- Completed Skills Section -->
                <div class="w-1/2 pr-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Completed Skills</h3>
                    <ul class="text-left space-y-2">
                        <li class="text-gray-700">HTML & CSS</li>
                        <li class="text-gray-700">JavaScript</li>
                        <li class="text-gray-700">React.js</li>
                        <li class="text-gray-700">Node.js</li>
                        <li class="text-gray-700">Python</li>
                    </ul>
                </div>

                <!-- Learning Skills Section -->
                <div class="w-1/2 pl-4 border-l border-gray-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Currently Learning</h3>
                    <ul class="text-left space-y-2">
                        <li class="text-gray-700">Machine Learning</li>
                        <li class="text-gray-700">TensorFlow</li>
                        <li class="text-gray-700">TypeScript</li>
                        <li class="text-gray-700">GraphQL</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>