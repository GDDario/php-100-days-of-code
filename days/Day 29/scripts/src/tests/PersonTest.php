<?php

namespace App\tests;

use App\Person;
use App\Product;
use Exception;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testThatThePersonMoneyWasDecreasedAfterASuccessfullPurchase()
    {
        $product = new Product('Candy', 00.30);
        $person = new Person('Gabriel', 7, 3.15);
        $personMoneyBefore = $person->money;

        $person->buyProduct($product);

        $this->assertEquals($person->money, $personMoneyBefore - $product->price);
        $this->assertLessThan($personMoneyBefore, $person->money);
    }

    public function testThatThePersonProductsBagHasIncreasedAfterASuccessfullPurchase()
    {
        $product = new Product('Candy', 00.30);
        $person = new Person('Gabriel', 7, 3.15);
        $productsBeforeShop = $person->purchasedProducts;

        $person->buyProduct($product);
        $productsAfterShop = $person->purchasedProducts;

        self::assertGreaterThan(count($productsBeforeShop), count($productsAfterShop));
        self::assertEquals(count($person->purchasedProducts), 1);
    }

    public function testThatAPersonCannotBuyARestrictedProductForItsAge()
    {
        parent::expectException(Exception::class);
        parent::expectExceptionMessage('Inappropriate age to purchase this product');

        $product = new Product('Good Wine', 180.00, 18);
        $person = new Person('Jhonatan', 17, 350.00);

        $person->buyProduct($product);
    }

    public function testThatAPersonCannotBuyAProductWhichCostsMoreThanItsBucket()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Person do not have sufficient money.');

        $product = new Product('Expensive Wine', 1000.00, 18);
        $person = new Person('Jhon', 47, 700.00);

        $person->buyProduct($product);
    }
}
