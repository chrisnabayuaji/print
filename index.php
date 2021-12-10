<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;

try {
  $connector = new CupsPrintConnector("print_tracer");

  /* Print a "Hello world" receipt" */
  $printer = new Printer($connector);
  $printer->text("Hello World!\n");
  // $printer->cut();

  /* Close printer */
  $printer->close();
} catch (Exception $e) {
  echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
}
