<?php
//require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("https://www.google.com.br/");
  }

  public function testMyTestCase()
  {
    $this->open("http://jqueryui.com/droppable/");
    sleep(2);
    $this->highlight("id=draggable");
    sleep(2);
    $this->highlight("id=droppable");
    sleep(1);
    $this->dragAndDrop("id=draggable", "160,40");
    sleep(5);
    $this->refresh();
    $this->waitForPageToLoad("30000");
    sleep(2);
    $this->highlight("id=draggable");
    sleep(2);
    $this->highlight("id=droppable");
    sleep(1);
    $this->dragAndDropToObject("id=draggable", "id=droppable");
  }
}
?>