<?php
    class pruebas extends Api
    {
        public function test1()
        {
            $this->assertTrue(cliente_solicitar_pedido());
        }
     }