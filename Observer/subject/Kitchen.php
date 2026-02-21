<?php

namespace subject;

interface Kitchen

{
   

    public function registerVisitor(Visitor $visitor): void;
    public function removeVisitor(Visitor $visitor): void;
    public function callVisitors(): void;
}
