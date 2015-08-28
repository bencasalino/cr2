<?php

    require_once __DIR__.'/../vendor/autoload.php';
    // class(s) goes here

    //required for silex
    $app = new Silex\Application();

    // allows twig to be used in the views folders
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    // points to home page after tests pass
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    // this is where the function goes for app->get!


    });


    // always needed to actually return the app
    return $app;
 ?>
