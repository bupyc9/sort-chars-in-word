<?php

if (!\function_exists('sortText')) {
    function sortText(string $text) {
        $result = [];
        $words = explode(' ', $text);
        foreach ($words as $word) {
            $chars = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
            sort($chars);
            $result[] = implode('', $chars);
        }

        return implode(' ', $result);
    }
}
