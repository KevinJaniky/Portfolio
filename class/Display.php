<?php

class Display
{

    public function __construct($title, $description, $index = true)
    {
        if ($index) {
            $ind = '';
        } else {
            $ind = '<meta name="robots" content="noindex, nofollow">';
        }

        echo '
            <!DOCTYPE html>
            <html  lang="fr">
            <head>
                <title>' . $title . ' | Kevin JANIKY</title>
                <meta charset="UTF-8">
                <meta name="description" content="' . $description . '">
                <meta name="author" content="Kevin JANIKY">
                ' . $ind . '
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
                <link rel="stylesheet" href="scss/app.css">
            </head>
            ';
    }

    public function footer()
    {
        echo '
            <footer>
                <div class="top">
        <div class=" widget liensutile">
            <ul>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Mentions légales</a></li>
            </ul>
        </div>
        <div class="widget lienautre">
            <ul>
                <li><a href="">Yuna creation</a></li>
                <li><a href="">Decrea</a></li>
                <li><a href="">Mon CV</a></li>
            </ul>
        </div>
        <div class="widget socialnetwork">
            <ul>
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Linkedin</a></li>
                <li><a href="">Google+</a></li>
            </ul>
        </div>
    </div>
    <div class="bottom">
        copyright 2017
    </div>
                
            
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/script.js"></script>
            </footer>
            </html>
        ';
    }
}