<?php

class Produk {
  public static $kursSGD = 11000;
  public const KURSUSD = 15000;
}

Produk::$kursSGD = 12000;
echo Produk::$kursSGD;

Produk::KURSUSD = 16000;
echo Produk::KURSUSD;
