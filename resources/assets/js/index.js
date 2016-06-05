import * as ChordViewer from 'chord-viewer';
import $ from 'jquery';
import { ukulele } from './instruments';
import * as Chord from './chords';

const $chord = $('#chord');
const elem = $chord.get(0);
const chord = Chord[$chord.data('chord')];

if (!!chord) {
  render(elem, ukulele, chord, {});
}