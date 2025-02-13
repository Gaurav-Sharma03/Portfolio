
<!DOCTYPE html>
<ht="en">

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
<!-- Education Section -->
<section id="education" class="py-20 bg-gray-50">
    <div class="container mx-auto text-center px-4">
        <h2 class="text-4xl font-bold text-gray-900 mb-6">My Education</h2>
        <p class="text-lg text-gray-700 mb-12">Here are my educational qualifications and the institutions I’ve attended.</p>

        <!-- Education Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Education Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Bachelor of Science in Computer Science</h3>
                <p class="text-gray-600 mb-2">dk</p>
                <p class="text-sm text-gray-500 mb-4">2018 - 2022</p>
                <p class="text-gray-700">A comprehensive program covering various aspects of computer science including algorithms, data structures, software engineering, and machine learning.</p>
            </div>

            <!-- Education Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Master of Technology (M.Tech) in Computer Engineering</h3>
                <p class="text-gray-600 mb-2">ABC Institute of Technology</p>
                <p class="text-sm text-gray-500 mb-4">2023 - Present</p>
                <p class="text-gray-700">Currently pursuing an M.Tech focusing on artificial intelligence and machine learning, enhancing skills in data science and deep learning techniques.</p>
            </div>

            <!-- Education Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Diploma in Web Development</h3>
                <p class="text-gray-600 mb-2">XYZ Online Academy</p>
                <p class="text-sm text-gray-500 mb-4">2021</p>
                <p class="text-gray-700">A comprehensive diploma program that covered HTML, CSS, JavaScript, and back-end technologies such as Node.js and database management.</p>
            </div>
        </div>
    </div>
</section>

</body>
</html>