<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Home
    </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php include 'header.php'; ?>

<div class="banner">
    <h2>Practice to pass your special paper 1 and 2 exam questions</h2>
    <a href="#" class="cta-button">Get Started</a>
</div>

<section>
    <?php
        // Generate content sections dynamically from a database or array
        $sections = [
            'Featured Quizzes' => 'Discover our top quizzes',
            'Popular Subjects' => 'Explore quizzes by subject',
            'Latest Additions' => 'Check out our newest quizzes'
        ];
        foreach ($sections as $title => $description) {
            echo '<div class="content-section">';
            echo "<h3>$title</h3>";
            echo "<p>$description</p>";
            echo '</div>';
        }
    ?>
</section>
<script src="online_quiz/bootstrap.js"></script>
<?php include 'footer.php'; ?>
</body>

</html>