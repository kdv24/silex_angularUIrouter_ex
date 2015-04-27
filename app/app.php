<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Word.php';

    session_start();

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    if (empty($_SESSION['things'])) {
      $_SESSION['things'] = array();
    }

    $app->get('/', function() use ($app) {
        $whoa = "Whoa, mama! I'm a string that got created in a Silex route! :D";

      return $app['twig']->render('home.html.twig', array('whoa' => $whoa));
    });

    $app->post('/add-thing', function() use ($app) {
        $whoa = "I'm a different string coming from a different Silex route!";
        $new_word = new Word($_POST['word']);
        $new_word->save();

        $words = Word::getAll();

        return $app['twig']->render('update.html.twig', array('whoa' => $whoa, 'words' => $words));
    });

    return $app;

?>
