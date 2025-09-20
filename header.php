<?php
wp_head();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>magnifico</title>

    <!-- Font CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
</head>

<body>

    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="/">magnifico</a>

            <nav class="primary-nav" id="primaryNav" aria-label="Primary">
                <ul>
                    <li class="has-caret"><a href="#">Products</a><span class="caret"></span></li>
                    <li class="has-caret"><a href="#">Solutions</a><span class="caret"></span></li>
                    <li class="has-caret"><a href="#">Services</a><span class="caret"></span></li>
                    <li class="has-caret"><a href="#">Help Center</a><span class="caret"></span></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </nav>

            <div class="actions">
                <a class="login" href="#">Log In</a>
                <a class="btn btn-primary" href="#">Sign Up Free <span class="arrow">➜</span></a>
            </div>

            <!-- the toggle button -->
            <button class="hamburger" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>