<?php
	class Person
	{
		public function read(BookInterface $book)
		{
			$book->open();
			$book->turnPage();
		}
	}

 ?>