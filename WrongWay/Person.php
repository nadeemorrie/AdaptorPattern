<?php 
	// require('Book.php');

	class Person {
		public function read(Book $book) {
			$book->open();
			$book->turnPage();
		}
	}

 ?>