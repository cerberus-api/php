<?php
namespace {
// global scope
	class Cerberus {

		function __construct( $key, $secret ){

			// authenticate

			// interface
			$this->get = new \Cerberus\GET();
			$this->post = new \Cerberus\POST();
			$this->put = new \Cerberus\PUT();
			$this->delete = new \Cerberus\DELETE();
		}

		private function auth(){

		}

	}
}

namespace Cerberus {
	$api = "http://cerberus.makesit.es/api/v1/";

	class GET {

		public function products($id=false){
			if( !$id ); // get all
			$this->https("products");

		}

		public function subscriptions($id=false){
			if( !$id ); // get all

		}

	}
	class POST {
		// currently not supported
	}
	class PUT {
		// currently not supported
	}
	class DELETE {
		// currently not supported
	}

	// Helpers
	// - handles all remote requests
	function https( $path=false, $data=array(), $method="GET" ){
		// prerequisites
		if (!function_exists('curl_init')) return;
		if( !$path ) return;

		// create a new cURL resource handle
		$ch = curl_init();

		// Now set some options (most are optional)

		// Set URL to download
		curl_setopt($ch, CURLOPT_URL, $Url);

		// Include header in result? (0 = yes, 1 = no)
		curl_setopt($ch, CURLOPT_HEADER, 0);

		// Should cURL return or print out the data? (true = return, false = print)
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Timeout in seconds
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);

		// Download the given URL, and return output
		$output = curl_exec($ch);

		// Close the cURL resource, and free system resources
		curl_close($ch);

		return $output;
	}

}

?>
