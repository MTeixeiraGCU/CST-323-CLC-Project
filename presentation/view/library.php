<?php
require_once '../../autoloader.php';
require_once '../../header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/presentation/handlers/libraryHandler.php';
?>

<h1>Your Library</h1>
<!-- This section is going to need a handler that will return all database entries for albums and fill a card out for each.  -->

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>