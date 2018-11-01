<?php

/**
 * @author Afanasyev Pavel <bupyc9@gmail.com>
 */
class SortTextTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function testSortText(): void
    {
        $this->assertSame(sortText('lemon orange banana apple'), 'elmno aegnor aaabnn aelpp');
        $this->assertSame(sortText('лимон апельсин банан яблоко'), 'илмно аеилнпсь аабнн бклооя');
        $this->assertSame(sortText('αβγαβγ αβγαβγαβγ'), 'ααββγγ αααβββγγγ');
    }
}