<?php

namespace Oblivion\Domain\Model
{
      /**
      * Class Client
      *
      * @package \Oblivion\Domain\Model
      * @auther Luyanda Siko
      */
    abstract class Client
    {
        abstract public function clientBuilder(): ClientBuilder;
    }
}
