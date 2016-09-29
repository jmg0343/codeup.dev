<?php
	class Log
	{
// A property called $filename where you store the name of the file for the log.
		private $filename;
		private $handle;
// A method called logMessage() that will take in a log level and message as before. 
// Update logMessage(); it should no longer need to open and close its own file handle, instead use the $handle property.
		private function logMessage($level, $message) {
// It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle.
			fwrite($this->handle, PHP_EOL . $message);
			

		}
		// Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.
		public function error($message) {
			$this->logMessage(" ERROR", $message);
		}

		public function info($message) {
			$this->logMessage(" INFO", $message);
		}

	// Open your Log.php in Sublime. Add a new property to the class called $handle.
	// Add a constructor to your Log class.
	// Take in a parameter called $prefix. If nothing is passed to the constructor, the $prefix should default to 'log'.
		public function __construct($prefix = 'log')
		{
		// Set the $filename property of the class to $prefix-YYYY-MM-DD.log.
			$this->setFileName($prefix);
		// Open the $filename for appending and assign the file pointer to the property $handle.
			$this->setHandle();

		}	

		private function setFileName($prefix) {
			$this->filename = $prefix . "-" . date("Y-m-d") . ".log";
		}

		private function setHandle() {
			$this->handle = fopen($this->filename, 'a');
		}
	// Add a destructor to close $handle when the class is destroyed.
		public function __destruct()
	    {
	        fclose($this->handle);
	    }
	}

	$log = new Log('Joey');
	$log->info('Muy Importante');