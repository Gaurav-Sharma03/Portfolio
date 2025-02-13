<!DOCTYPE html>
<html lang="en">

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

<body class="bg-gray-100 text-gray-800">

    <!-- Header Section -->
    <?php require('Header.php'); ?>
    <!-- Hero Section -->
    <?php require('Hero.php'); ?>
    <!--  Section -->
    <?php require('About.php'); ?>
    <!-- Projects Section -->
    <?php require('Project.php'); ?>
    <!-- Experience Section -->
    <?php require('Experience.php'); ?>
    <!-- Skill Section -->
    <?php require('Skill.php'); ?>
    <!-- Education Section -->
    <?php require('Education.php'); ?>
    <!-- Contact Section -->
    <?php require('Contact.php'); ?>
    <!-- Footer Section -->
    <?php include('footer.php'); ?>

</body>

</html>