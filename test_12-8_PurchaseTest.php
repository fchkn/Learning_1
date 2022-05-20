<?php
    use PHPUNIT\Freamwork\TestCase;
    include "test_12-8_Purchase.php";

    class PurchaseTest extends TestCase {
        public function testFailure() {
            $price = 100;
            $tax = 8;
            $result = purchase_check($price, $tax);
            $this->assertEquals(108, $result);
        }
    }
?>