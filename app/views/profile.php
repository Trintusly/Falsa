<?php

    Component::load('page', [

        'title'    => htmlspecialchars($_router->params->username),
        'subtitle' => "Parameters injected by the router. Try changing it."

    ]);

?>