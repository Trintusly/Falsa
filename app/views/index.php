<?php

// Wait a minute?
// THIS IS OUR INDEX?? WHERE'S THE HTML???

// Answer:
// There isn't.
// We use components to not repeat ourselves.
// Since our app uses the same page layout, we turned it into a component.
// Want to check it out? It's located @ app/components/page.php

Component::load('page', [ 

  'title'    => 'Welcome to Falsa!', 
  'subtitle' => 'A simple tool to make simple web apps.' 

]);

?>