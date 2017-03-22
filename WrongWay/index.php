<?php 
	require('Book.php');
	require('Person.php');

	$book = new Book();
	(new Person)->read($book);

 ?>