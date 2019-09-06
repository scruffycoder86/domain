<?php

 namespace Oblivion\Domain\Model\Contracts
 {
     /**
     * Client
     */
     interface Client
     {
         public function getName(): string;

         public function getAddress(): Address;

         public function getRepresentative(): ?Person;

         public function billing(...$dates): Account;
     }
 }
