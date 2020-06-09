<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        return view('kelasBahasa.kelasbahasa');
    }

    //Kelas Bahasa Jepang Controller
    public function jepang(){
        return view('kelasBahasa.jepang');
    }
    public function hurufJepang(){
        return view('kelasBahasa.HurufJepang');
    }
    public function Hiragana(){
        return view('kelasBahasa.Hiragana');
    }
    public function Katakana(){
        return view('kelasBahasa.Katakana');
    }
    public function Kanji(){
        return view('kelasBahasa.Kanji');
    }
    
    public function SalamJepang(){
        return view('kelasBahasa.SalamUngkapanJapan1');
    }
    public function Kalimat(){
        return view('kelasBahasa.StrukrurKalimatJapan');
    }

    //Kelas Bahasa Korea Controller
    public function korea(){
        return view('kelasBahasa.Korean');
    }
    public function Hangeul(){
        return view('kelasBahasa.Hangeul');
    }
    public function VokalHangeul(){
        return view('kelasBahasa.VokalHangeul');
    }
    public function VokalRangkap(){
        return view('kelasBahasa.VokalRangkap');
    }
    public function KonsonanHangeul(){
        return view('kelasBahasa.KonsonanHangeul');
    }
    public function KonsonanRangkap(){
        return view('kelasBahasa.KonsonanRangkap');
    }
    public function SalamUngkapan(){
        return view('kelasBahasa.SalamUngkapan');
    }
    public function PolaKalimatKorean(){
        return view('kelasBahasa.PolaKalimatKorean');
    }
}
