<?php

/**
 * Template Name: Updated Enrollment Template - Q3 2023 
 */

?>

<?php
// global $post;
// get_header();

if (post_password_required()) {
    echo '<style>
    body{
        display: flex;
        height: 98vh;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-family: Helvetica, Arial, sans-serif;
        font-size: calc(0.75em + 1vmin);
    }
    .site-header {
        display: none !important;
    }
    img{
        min-width: 320px;
    }
    form{
        text-align: center;
    }
    p {
        max-width: 24rem;
        line-height: 1.75;
    }
    input {
        display: block;
        margin: 5% auto;
        border: 2px solid #00c496;
        border-radius: 1rem;
        line-height: 3em;
    }

    input[type="password"]:focus {
        outline: none;
    }

    input[type="password"] {
        padding: 0 5%;
    }

    input[type="submit"] {
        background: #00c496;
        text-transform: uppercase;
        color: #fff;
        font-weight: 700;
        padding: 0 3.333333em;
        transition: all 0.3s ease;
        min-height: 3em;
        min-width: 220px;
    }

    input[type="submit"]:hover {
        background-color: #fff;
        color: #00c496;
    }
    
    </style>';
    // I had to manually specify the dimensions because the svg files became really huge. That values can be adjusted in a scenario where we change the logo again.
    echo '<img src="/wp-content/uploads/2023/01/IDX-ZF-Logo_preferred.png" height="95" width="238" alt="ZeroFox">';
    echo get_the_password_form();
} else {
    include 'primary-page-q3-2023.php';
}
?>

