<?php 

	class Kindle implements eReaderInterface {

		public function turnOn() {
			var_dump('turn on kindle');
		}

		public function pressNextButton() {
			var_dump('press next button');
		}

	}

 ?>