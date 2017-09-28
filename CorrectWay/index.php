<?php 
	require('BookInterface.php');
	require('eReaderInterface.php');
	require('Book.php');
	require ('KindleAdapter.php');
	require('Kindle.php');
	require ('Person.php');

	(new Person)->read(new Book);

	(new Person)->read(new KindleAdapter(new Kindle));
 ?>