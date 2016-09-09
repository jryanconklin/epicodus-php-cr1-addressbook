<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";

    // Start Session and Define List of Contacts
    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    //Initialize Silex
    $app = new Silex\Application();

    //Initialize Twig
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('contacts.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("/add-contacts", function() use ($app) {
        $contact = new Contact($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['street'], $_POST['city'], $_POST['state'], $_POST['zip'], $_POST['country']);
        $contact->save();
        return $app['twig']->render('create-contact.html.twig', array('newcontact' => $contact ));
    });

    $app->post("/delete-contacts", function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('delete-contacts.html.twig');
    });


    return $app;
?>
