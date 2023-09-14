<?php

namespace App\Http\Controllers;

class SoalNomorSatuController extends Controller
{
    public function __invoke()
    {
        $data = ['11', '12', 'cii', '001', '2', '1998', '7', '89', 'iia', 'fii'];
        $substringsDict = [];
        $allSubstrings = collect();

        foreach ($data as $item) {
            if (ctype_alpha($item)) {
                $substrings = $this->lexicographicSubstrings([$item]);
                $substringsDict[$item] = $substrings;
                $allSubstrings = $allSubstrings->merge($substrings);
            }
        }

        $sortedAllSubstrings = $allSubstrings->unique()->sort()->values();

        return view('Soal.nomor-satu', compact('substringsDict', 'sortedAllSubstrings'));
    }

    private function lexicographicSubstrings($arr)
    {
        $substrings = collect();

        foreach ($arr as $word) {
            for ($i = 0; $i < strlen($word); $i++) {
                for ($j = $i + 1; $j <= strlen($word); $j++) {
                    $substrings->add(substr($word, $i, $j - $i));
                }
            }
        }

        return $substrings->unique()->sort()->values();
    }
}
