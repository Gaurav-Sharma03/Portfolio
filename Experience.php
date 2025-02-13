
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

<!-- Experience Section -->
<section id="experience" class="py-20 bg-gray-50">
    <div class="container mx-auto text-center px-4">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">My Experience</h2>
        <p class="text-lg text-gray-700 mb-12">Here is a look at my professional journey and the experience I've gained along the way.</p>
        
        <!-- Experience Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Experience 1 Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <h3 class="text-2xl font-semibold text-gray-800 mb-2">Web Developer</h3>
                <p class="text-sm text-gray-500 mb-2">Company XYZ</p>
                <p class="text-gray-600 mb-4">Developed and maintained websites, ensuring responsiveness and cross-browser compatibility. Led a team of 3 developers to enhance the user experience.</p>
                <span class="text-gray-500 text-sm">Jan 2021 - Present</span>
            </div>

            <!-- Experience 2 Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <h3 class="text-2xl font-semibold text-gray-800 mb-2">Front-End Developer</h3>
                <p class="text-sm text-gray-500 mb-2">Tech Solutions</p>
                <p class="text-gray-600 mb-4">Collaborated with the design team to build responsive and interactive websites. Optimized front-end performance for faster load times and better SEO.</p>
                <span class="text-gray-500 text-sm">Mar 2019 - Dec 2020</span>
            </div>

            <!-- Experience 3 Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-all">
                <h3 class="text-2xl font-semibold text-gray-800 mb-2">Intern, Web Development</h3>
                <p class="text-sm text-gray-500 mb-2">Digital Agency</p>
                <p class="text-gray-600 mb-4">Assisted in building user-friendly websites, focusing on optimizing user interfaces and ensuring proper integration with back-end services.</p>
                <span class="text-gray-500 text-sm">Jun 2018 - Feb 2019</span>
            </div>
        </div>
    </div>
</section>
</body>
</html>