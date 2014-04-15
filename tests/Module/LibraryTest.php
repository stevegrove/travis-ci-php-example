<?php

use \Organization\Module\Library;

class LibraryTest extends PHPUnit_Framework_TestCase
{
  public function testLibrary()
  {
    $example = new Library;

    $this->assertEquals($example->whatAmI(), 'an example');
  }
}