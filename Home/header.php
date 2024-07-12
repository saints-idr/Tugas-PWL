<?php include 'includes/header.php'; ?>

<main id="main-content">
    <div class="container">
        <h2>Main Content</h2>
    </div>
    <?php
        // Default page
        $page - 'Home';

        //Check if 'page' parameter is set in URL
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        //Include the requested page if it exits
        switch ($page) {
            case 'functionArray':
                include 'pages/functionArray.php';
                break;
            case 'functionCalculate':
                include 'pages/funtionCalculate.php';
                break;
            case 'functionFactorial':
                include 'pages/functionFactorial.php';
                break;
            case 'functionPrime':
                include 'functionPrime.php';
                break;
            case 'functionString':
                include 'pages/functionString.php';
                break;
            default:
                echo '<p>Page not found.</p>';
                break;
        }
        ?>
</main>