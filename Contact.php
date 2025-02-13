    <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the input data (simple validation)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // You can save the form data to a database or send an email
        
        // Send email (change the recipient email address)
        $to = "your-email@example.com"; // Replace with your email address
        $subject = "New Contact Form Message from $name";
        $body = "You have received a new message from $name.\n\n".
                "Email: $email\n\n".
                "Message:\n$message";
        $headers = "From: $email" . "\r\n" . "Reply-To: $email";

        if (mail($to, $subject, $body, $headers)) {
            $success_message = "Thank you for contacting us! We will get back to you soon.";
        } else {
            $error_message = "Sorry, there was an error sending your message. Please try again.";
        }
    } else {
        $error_message = "Please fill in all fields.";
    }
}
?>

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

<!-- Contact Section -->
<section class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold text-center text-gray-900 mb-6">Get in Touch</h1>
        <p class="text-center text-gray-600 mb-12">
            I’m here to answer any questions or discuss potential projects. Feel free to reach out!
        </p>

        <?php
        if (isset($success_message)) {
            echo "<div class='bg-green-500 text-white p-4 rounded mb-4'>$success_message</div>";
        }
        if (isset($error_message)) {
            echo "<div class='bg-red-500 text-white p-4 rounded mb-4'>$error_message</div>";
        }
        ?>

        <div class="flex justify-center">
            <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8">
                <form action="contact.php" method="POST">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500" id="name" name="name" type="text" placeholder="Your Name" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500" id="email" name="email" type="email" placeholder="Your Email" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="message">Message</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500" id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    </body>
</html>

