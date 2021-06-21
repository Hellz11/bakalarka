<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchesController extends Controller
{
    public function index()
    {
        return view('searches.index');
    }

    public function words(Request $request)
    {
    	$search = $request->get('search');

    	if(!preg_match('/^[\x{3041}-\x{3096}\x{30a1}-\x{30fc}\x{4e00}-\x{9faf}]+$/u', $search)) // TODO: order by kana when searching in kana
    	{
	    	$posts = DB::table('edict')->where('meaning', 'like', '%'.$search.'%')->orderByRaw('LENGTH(meaning)')->paginate(10); 
	    	$posts->appends(['search' => $search]);
	    }
	    else
	    {
	    	$posts = DB::table('edict')->where('word', 'like', '%'.$search.'%')->orWhere('reading', 'like', '%'.$search.'%')->orderByRaw('LENGTH(word)')->paginate(10); 
	    	$posts->appends(['search' => $search]);
	    }

        return view('searches.words', ['posts' => $posts]);
    }

    public function kangxi()
    {
	    $kanji = DB::table('kangxi')->paginate(10); 

        return view('searches.kangxi', ['kanji' => $kanji]);
    }

    public function radicals()
    {
        return view('searches.radicals');
    }

    public function rad(Request $request)
    {
    	$rad = $request->input();

        if (count($rad['radicals']) == 12)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->where('parts', 'like', '%'.$rad['radicals'][2].'%')->where('parts', 'like', '%'.$rad['radicals'][3].'%')->where('parts', 'like', '%'.$rad['radicals'][4].'%')->where('parts', 'like', '%'.$rad['radicals'][5].'%')->where('parts', 'like', '%'.$rad['radicals'][6].'%')->where('parts', 'like', '%'.$rad['radicals'][7].'%')->where('parts', 'like', '%'.$rad['radicals'][8].'%')->where('parts', 'like', '%'.$rad['radicals'][9].'%')->where('parts', 'like', '%'.$rad['radicals'][10].'%')->where('parts', 'like', '%'.$rad['radicals'][11].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 11)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->where('parts', 'like', '%'.$rad['radicals'][2].'%')->where('parts', 'like', '%'.$rad['radicals'][3].'%')->where('parts', 'like', '%'.$rad['radicals'][4].'%')->where('parts', 'like', '%'.$rad['radicals'][5].'%')->where('parts', 'like', '%'.$rad['radicals'][6].'%')->where('parts', 'like', '%'.$rad['radicals'][7].'%')->where('parts', 'like', '%'.$rad['radicals'][8].'%')->where('parts', 'like', '%'.$rad['radicals'][9].'%')->where('parts', 'like', '%'.$rad['radicals'][10].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 10)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->where('parts', 'like', '%'.$rad['radicals'][2].'%')->where('parts', 'like', '%'.$rad['radicals'][3].'%')->where('parts', 'like', '%'.$rad['radicals'][4].'%')->where('parts', 'like', '%'.$rad['radicals'][5].'%')->where('parts', 'like', '%'.$rad['radicals'][6].'%')->where('parts', 'like', '%'.$rad['radicals'][7].'%')->where('parts', 'like', '%'.$rad['radicals'][8].'%')->where('parts', 'like', '%'.$rad['radicals'][9].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 9)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->where('parts', 'like', '%'.$rad['radicals'][2].'%')->where('parts', 'like', '%'.$rad['radicals'][3].'%')->where('parts', 'like', '%'.$rad['radicals'][4].'%')->where('parts', 'like', '%'.$rad['radicals'][5].'%')->where('parts', 'like', '%'.$rad['radicals'][6].'%')->where('parts', 'like', '%'.$rad['radicals'][7].'%')->where('parts', 'like', '%'.$rad['radicals'][8].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 8)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->where('parts', 'like', '%'.$rad['radicals'][2].'%')->where('parts', 'like', '%'.$rad['radicals'][3].'%')->where('parts', 'like', '%'.$rad['radicals'][4].'%')->where('parts', 'like', '%'.$rad['radicals'][5].'%')->where('parts', 'like', '%'.$rad['radicals'][6].'%')->where('parts', 'like', '%'.$rad['radicals'][7].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 7)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->where('parts', 'like', '%'.$rad['radicals'][2].'%')->where('parts', 'like', '%'.$rad['radicals'][3].'%')->where('parts', 'like', '%'.$rad['radicals'][4].'%')->where('parts', 'like', '%'.$rad['radicals'][5].'%')->where('parts', 'like', '%'.$rad['radicals'][6].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 6)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->where('parts', 'like', '%'.$rad['radicals'][2].'%')->where('parts', 'like', '%'.$rad['radicals'][3].'%')->where('parts', 'like', '%'.$rad['radicals'][4].'%')->where('parts', 'like', '%'.$rad['radicals'][5].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 5)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->where('parts', 'like', '%'.$rad['radicals'][2].'%')->where('parts', 'like', '%'.$rad['radicals'][3].'%')->where('parts', 'like', '%'.$rad['radicals'][4].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 4)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->where('parts', 'like', '%'.$rad['radicals'][2].'%')->where('parts', 'like', '%'.$rad['radicals'][3].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 3)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->where('parts', 'like', '%'.$rad['radicals'][2].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 2)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->where('parts', 'like', '%'.$rad['radicals'][1].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
        if (count($rad['radicals']) == 1)
        {
            $ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$rad['radicals'][0].'%')->orderByRaw('LENGTH(parts)')->paginate(1000);

            $ava_kanji->appends(['rad' => $rad]);
        }
        
    	//$c = 0;

    	//foreach ($rad['radicals'] as $r) 
    	//{
    	//	$ava_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$r.'%')->orderByRaw('LENGTH(parts)')->paginate(10);
    	//	//if($c == 0) $tem = $ava_kanji;
    	//	//$c++;
    	//	$ava_kanji->appends(['r' => $r]);

    	//	/*if ($tem->kanji == $ava_kanji->kanji)
    	//	{
    	//		$ava_kanji->appends(['r' => $r]);
    	//	}*/
    	//}

    	return view('searches.found_kanji', ['ava_kanji' => $ava_kanji]);
   	}

    public function en_rad()
    {
        return view('searches.english_words');
    }

   	public function eng_radicals(Request $request)
    {
        $eng_radicals = $request->get('eng_radicals');
        $found_first_rad = '';
        $found_second_rad = '';
        $found_third_rad = '';

        $rad = explode("; ", $eng_radicals);

        if (isset($rad[0])) $found_first_rad = DB::table('kangxi')->where('english_name', 'like', '%'.$rad[0].'%')->limit(1)->get();
        if (isset($rad[1])) $found_second_rad = DB::table('kangxi')->where('english_name', 'like', '%'.$rad[1].'%')->limit(1)->get();
        if (isset($rad[2])) $found_third_rad = DB::table('kangxi')->where('english_name', 'like', '%'.$rad[2].'%')->limit(1)->get();

        if($found_first_rad != NULL and $found_second_rad != NULL and $found_third_rad != NULL)
        {
            $got_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$found_first_rad->first()->radical.'%')->where('parts', 'like', '%'.$found_second_rad->first()->radical.'%')->where('parts', 'like', '%'.$found_third_rad->first()->radical.'%')->paginate(10);
            $got_kanji->appends(['eng_radicals' => $eng_radicals]);
        }
        elseif ($found_first_rad != NULL and $found_second_rad != NULL and $found_third_rad == NULL)
        {
            $got_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$found_first_rad->first()->radical.'%')->where('parts', 'like', '%'.$found_second_rad->first()->radical.'%')->paginate(10);
            $got_kanji->appends(['eng_radicals' => $eng_radicals]); 
        }
        else
        {
            $got_kanji = DB::table('kradfile_upraveno')->where('parts', 'like', '%'.$found_first_rad->first()->radical.'%')->paginate(10);
            $got_kanji->appends(['eng_radicals' => $eng_radicals]);
        }

        return view('searches.rad_english', ['got_kanji' => $got_kanji]);
    }
}
