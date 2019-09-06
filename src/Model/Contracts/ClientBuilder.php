<?php

 namespace Oblivion\Domain\Model\Contracts
 {
     /**
     * ClientBuilder
     */
     interface ClientBuilder
     {
         /**
         * Returns an instance of built Client interface
         */
         public function client(): Client;
     }
 }
