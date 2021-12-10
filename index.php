<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;

try {
  $connector = new CupsPrintConnector("print_tracer");

  /* Print a "Hello world" receipt" */
  $printer = new Printer($connector);
  $printer->text("2109220197              PendBPJS Printer 22 Sep 2021\n");
  $printer->text("FILE REKAM MEDIS\n");
  $printer->text("Jenis Pasien : BPJS\n");
  $printer->text("Status Pasien : Lama\n");
  $printer->text("No. RM : 088521\n");
  $printer->text("Nama Pasien : Sri Sulanjari\n");
  $printer->text("Alamat : Kemabaran 01/02\n");
  $printer->text("Alamat : Kebumen\n");
  $printer->text("Poli Tujuan : Klinik jantung dan Pembuluh darah\n");
  $printer->text("Tanggal masuk : 22 September 2021\n");
  $printer->text("tanggal Terakhir masuk\n");
  $printer->text("\n");
  $printer->text("\n");
  $printer->text("\n");
  $printer->text("Ah\n");
  $printer->feed(10);
  // $printer->cut();

  /* Close printer */
  $printer->close();
} catch (Exception $e) {
  echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
}
