<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;

try {
  $connector = new CupsPrintConnector("print_tracer");

  /* Print a "Hello world" receipt" */
  $printer = new Printer($connector);
  $printer->text("2109220197              PendBPJS Printer 22 Sep 2021");
  $printer->text("----------------------------------------------------");
  $printer->text("FILE REKAM MEDIS");
  $printer->text("----------------------------------------------------");
  $printer->text("Jenis Pasien : BPJS");
  $printer->text("Status Pasien : Lama");
  $printer->text("No. RM : 088521");
  $printer->text("Nama Pasien : Sri Sulanjari");
  $printer->text("Alamat : Kemabaran 01/02");
  $printer->text("Alamat : Kebumen");
  $printer->text("Poli Tujuan : Klinik jantung dan Pembuluh darah");
  $printer->text("Tanggal masuk : 22 September 2021");
  $printer->text("tanggal Terakhir masuk");
  // $printer->cut();

  /* Close printer */
  $printer->close();
} catch (Exception $e) {
  echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
}
