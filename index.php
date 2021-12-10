<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;

// $connector = new FilePrintConnector("php://stdout");
$connector = new WindowsPrintConnector("192.168.1.113/epson\ lq-310\ escp2");
$printer = new Printer($connector);
$printer->text("Hello World!\n");
$printer->cut();
$printer->close();
