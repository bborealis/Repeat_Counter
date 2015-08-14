<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    session_start();

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("wordrepeat.twig");
    });

    $app->get("/results", function() use ($app) {
        $this_RepeatCounter = new RepeatCounter;
        $this_game = $this_RepeatCounter->countsRepeats($_GET["word"], $_GET["string_of_words"]);
        return $app["twig"]->render("results.twig", array("gameinfo" => $this_game));
    });

    return $app;

?>
