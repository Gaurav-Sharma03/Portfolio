<!DOCTYPE html>
<htm lang="en">

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
<!-- Projects Section -->
<section id="projects" class="py-20 bg-white">
    <div class="container mx-auto text-center px-4">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">My Projects</h2>
        <p class="text-lg text-gray-700 mb-12">Here are a few projects I've worked on recently. Feel free to explore!</p>

        <!-- Project Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Project 1 Card -->
            <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="path/to/project-image.jpg" alt="Project 1" class="mb-4 rounded-lg object-cover w-full h-48">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Project 1</h3>
                <p class="text-gray-600 mb-4">Description of the project, the technologies used, and its impact. This could be a brief overview of the project's functionality and the tools utilized.</p>
                <a href="project-link.html" class="text-blue-600 font-bold hover:text-blue-800 transition-colors duration-200">View Project</a>
            </div>

            <!-- Project 2 Card -->
            <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="path/to/project-image2.jpg" alt="Project 2" class="mb-4 rounded-lg object-cover w-full h-48">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Project 2</h3>
                <p class="text-gray-600 mb-4">Description of the project, the technologies used, and its impact. You can explain how this project helped solve a particular problem.</p>
                <a href="project-link.html" class="text-blue-600 font-bold hover:text-blue-800 transition-colors duration-200">View Project</a>
            </div>

            <!-- Project 3 Card -->
            <div class="bg-gray-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="path/to/project-image3.jpg" alt="Project 3" class="mb-4 rounded-lg object-cover w-full h-48">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Project 3</h3>
                <p class="text-gray-600 mb-4">Description of the project, the technologies used, and its impact. You can mention any challenges you overcame during development.</p>
                <a href="project-link.html" class="text-blue-600 font-bold hover:text-blue-800 transition-colors duration-200">View Project</a>
            </div>

        </div>
    </div>
</section>
</body>
</html>
