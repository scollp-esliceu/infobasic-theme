<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Benvinguts a la meva web</title>
    <?php wp_head();?>
    <link rel="stylesheet" href="header.css">
    
</head>
<body <?php body_class()?>>
    <header class="menu">
        <nav>
            <ul>
                <li><a href="/">Inici</a></li>
            </ul>
        </nav>
    </header>