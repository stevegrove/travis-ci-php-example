<?php

class ExampleTest extends PHPUnit_Framework_TestCase {

  public function testExample()
  {
    $example = new Example;

    $this->assert($example->whatAmI(), 'an example');
  }
}