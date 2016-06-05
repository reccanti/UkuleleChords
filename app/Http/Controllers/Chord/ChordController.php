<?php

namespace App\Http\Controllers\Chord;

use App\Http\Controllers\Controller;

class ChordController extends Controller {
    
    /**
     * This function parses the name of the chord 
     * and then renders it on the page
     */
    public function parseChord ($name) {
        $chord = explode('-', $name);
        $suffix = '';
        if (count($chord) > 1) {
            if ($chord[1] == 'sharp') {
                $suffix = '#';
            } else if ($chord[1] == 'flat') {
                $suffix = 'b';
            }
        }
        // return $chord[0] . $suffix . ' Chord';
        return view('chord', [
            'chord' => $chord[0] . $suffix . ' Chord'
        ]);
    }
}