<?php

namespace App\Helpers;

class TextAnalyzer {
    public static function analyze($text = '')
    {
        $characters = strlen(str_replace(' ', '', $text));
        $vowels = preg_match_all('/[aeiou]/i', $text);
        $spaces = preg_match_all('/ /', $text);
        return [
            'characters' => $characters,
            'vowels' => $vowels,
            'spaces' => $spaces
        ];
    }
}