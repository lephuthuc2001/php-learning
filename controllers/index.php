<?php
  $books = array(
      array(
          "name" => "The Lord of the Rings",
          "author" => "J.R.R. Tolkien",
          "url" => "https://www.tolkienestate.com/en/writing/about-the-lord-of-the-rings.html",
          "released_year" => 1954
      ),
      array(
          "name" => "Harry Potter and the Philosopher's Stone",
          "author" => "J.K. Rowling",
          "url" => "https://www.wizardingworld.com/books/harry-potter-and-the-philosophers-stone",
          "released_year" => 1997
      ),
      array(
          "name" => "To Kill a Mockingbird",
          "author" => "Harper Lee",
          "url" => "https://en.wikipedia.org/wiki/To_Kill_a_Mockingbird",
          "released_year" => 1960
      )
  );     

  function filterByYear($books,$afterYear){
    $output = array();
    
    foreach($books as $book){
      if($book["released_year"] >$afterYear ){
        array_push($output, $book);
      };
    };

    return $output;
  }

  $heading="Home Page";
  

  require "./views/index.view.php";