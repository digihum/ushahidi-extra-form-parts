<?php defined('SYSPATH') or die('No direct script access.');
// Start wildlife category block
class extra_form_parts { // CHANGE THIS FOR OTHER BLOCKS
	public function __construct()
	{
		// Array of block params
		$block = array(
			"classname" => "extra_form_parts", // Must match class name aboce
			"name" => "Extra form parts",
			"description" => "Extra form parts"
		);
		// register block with core, this makes it available to users 
		blocks::register($block);
	}
	public function block($view)
	{
		$content = new View($view);
		echo $content;
	}
}
new extra_form_parts;