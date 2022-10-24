<?php

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

require_once 'dojo_code.php';

final class DojoTests extends TestCase {

    /**
     * @dataProvider handsWithAPair
     */
    public function testHasAPairTrue(array $hand) {
        assertTrue(hasAPair($hand));
    }

    public function handsWithAPair() : array
    {
        return [
            [[2, 2]],
            [[5, 5]],
            [[4, 5, 5, 6, 10]],
            [[4, 5, 8, 5, 12]],
            [[12, 3, 12, 5, 12]],
            [[9, 6, 9, 6, 15]],
            [[2, 3, 4, 6, 2]],
        ];
    }

    /**
     * @dataProvider handsWithoutAPair
     */
    public function testHasAPairFalse(array $hand) {
        assertFalse(hasAPair($hand));
    }

    public function handsWithoutAPair() : array
    {
        return [
            [[2, 3]],
            [[5, 6]],
            [[4, 5, 7, 6, 10]],
            [[4, 5, 8, 15, 12]],
            [[12, 3, 8, 1, 13]],
            [[9, 6, 8, 7, 2]],
            [[2, 3, 4, 5, 6]],
        ];
    }


    /**
     * @dataProvider handsWithThreeOfAKind
     */
    public function testHasThreeOfAKind(array $hand) {
        assertTrue(hasThreeOfAKind($hand));
    }

    public function handsWithThreeOfAKind() : array
    {
        return [
            [[2, 2, 2]],
            [[5, 5, 5]],
            [[4, 5, 5, 5, 10]],
            [[4, 5, 8, 5, 5]],
            [[12, 3, 12, 5, 12]],
            [[9, 9, 9, 6, 15]],
            [[2, 3, 4, 2, 2]],
        ];
    }

    /**
     * @dataProvider handsWithoutThreeOfAKind
     */
    public function testHasThreeOfAKindFalse(array $hand) {
        assertFalse(hasThreeOfAKind($hand));
    }

    public function handsWithoutThreeOfAKind() : array
    {
        return [
            [[2, 3]],
            [[5, 6]],
            [[4, 5, 7, 6, 10]],
            [[4, 5, 8, 15, 12]],
            [[12, 3, 8, 1, 13]],
            [[9, 6, 8, 7, 2]],
            [[2, 3, 4, 5, 6]],
        ];
    }


    /**
     * @dataProvider handsWithASquare
     */
    public function testHasASquareTrue(array $hand) {
        assertTrue(hasASquare($hand));
    }

    public function handsWithASquare() : array
    {
        return [
            [[2, 2, 2, 2]],
            [[5, 5, 5, 5]],
            [[5, 5, 5, 5, 10]],
            [[4, 5, 5, 5, 5]],
            [[12, 3, 12, 12, 12]],
            [[9, 9, 9, 9, 15]],
            [[2, 2, 2, 6, 2]],
        ];
    }

    /**
     * @dataProvider handsWithoutASquare
     */
    public function testHasASquareFalse(array $hand) {
        assertFalse(hasASquare($hand));
    }

    public function handsWithoutASquare() : array
    {
        return [
            [[2, 3]],
            [[5, 6]],
            [[4, 5, 7, 6, 10]],
            [[4, 5, 8, 15, 12]],
            [[12, 3, 8, 1, 13]],
            [[9, 6, 8, 7, 2]],
            [[2, 3, 4, 5, 6]],
        ];
    }


    /**
     * @dataProvider handsWithAFull
     */
    public function testHasAFullTrue(array $hand) {
        assertTrue(hasAFull($hand));
    }

    public function handsWithAFull() : array
    {
        return [
            [[2, 2, 3, 3, 3]],
            [[5, 5, 5, 6, 6]],
            [[4, 5, 5, 4, 5]],
            [[9, 6, 9, 6, 9]],
            [[2, 4, 4, 4, 2]],
        ];
    }

    /**
     * @dataProvider handsWithoutAFull
     */
    public function testHasAFullFalse(array $hand) {
        assertFalse(hasAFull($hand));
    }

    public function handsWithoutAFull() : array
    {
        return [
            [[2, 3]],
            [[5, 6]],
            [[4, 5, 7, 6, 10]],
            [[4, 5, 8, 15, 12]],
            [[12, 3, 8, 1, 13]],
            [[9, 6, 8, 7, 2]],
            [[2, 3, 4, 5, 6]],
        ];
    }


    /**
     * @dataProvider handsWithAStraight
     */
    public function testHasAStraightTrue(array $hand) {
        assertTrue(hasAStraight($hand));
    }

    public function handsWithAStraight() : array
    {
        return [
            [[2, 3, 4, 5, 6]],
            [[9, 8, 7, 6, 5]],
            [[4, 5, 7, 6, 8]],
            [[9, 6, 7, 8, 10]],
            [[2, 4, 3, 6, 5]],
        ];
    }

    /**
     * @dataProvider handsWithoutAFull
     */
    public function testHasAStraightFalse(array $hand) {
        assertFalse(hasAStraight($hand));
    }

    public function handsWithoutAStraight() : array
    {
        return [
            [[2, 3]],
            [[5, 6]],
            [[4, 5, 7, 6, 10]],
            [[4, 5, 8, 15, 12]],
            [[12, 3, 8, 1, 13]],
            [[9, 6, 8, 7, 2]],
            [[2, 3, 4, 5, 2]],
        ];
    }
}