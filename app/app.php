<?php
    require_once(__DIR__. "/../vendor/autoload.php");
    require_once(__DIR__. "/../src/RepeatCounter.php");

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__ . "/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("form.html.twig");
    });

    $app->get("/search_word", function() use($app) {
        $search_sentence = $_GET["input-sentence"];
        $search_word = $_GET["input-word"];
        $new_word_repeat_counter = new RepeatCounter($search_sentence, $search_word);
        $count = $new_word_repeat_counter->countRepeats();

        return $app["twig"]->render("search_result.html.twig", array("word_searched" => $search_word, "sentence_searched" => $search_sentence, "word_count" => $count));
    });

    return $app;

?>
