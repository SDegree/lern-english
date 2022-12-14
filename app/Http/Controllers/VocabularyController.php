<?php

namespace App\Http\Controllers;

use App\Models\English;
use App\Models\Indonesia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Gate;
use PhpParser\Node\Expr\FuncCall;

class VocabularyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'vocabularys' => English::latest()->level()->paginate(1),
        ]);
    }

    public function ind()
    {
        return view('home', [
            'vocabularys' => Indonesia::latest()->level()->paginate(1),
        ]);
    }

    public function choose()
    {
        return view('choose');
    }

    public function task(Request $request)
    {
        // $request->session()->remove('hasil');
        return view('task', [
            'vocabularys' => English::latest()->level()->paginate(1),
        ]);
    }

    public function taskInd()
    {
        return view('task', [
            'vocabularys' => Indonesia::latest()->level()->paginate(1),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('isAdmin')) abort(403, 'Halaman khusus admin');
        return view('createVoc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // f1(fild 1), f2(fild 2), m(model)
        function sendToDb($f1, $f2, $m, $request)
        {

            $dbe = English::all();

            $level = count($dbe) === 0 ? 1 : $dbe[count($dbe) - 1]->level;
            $record = count($dbe) === 0 ? 1 : count($dbe);
            if ($record % 10 === 0) {
                $level += 1;
            }
            $target = explode(', ', $request["$f2"]);
            $count = 1 + count($m === 0 ? $dbe : Indonesia::all());
            foreach ($target as $k) {
                $data["$f1"] = $count++;
                $data["$f2"] = $k;
                $data['level'] = $level;
                $m === 0 ? English::create($data) : Indonesia::create($data);
            }
        }

        sendToDb('english_id', 'kosakata', 1, $request);
        sendToDb('indonesia_id', 'vocabulary', 0, $request);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\English  $english
     * @return \Illuminate\Http\Response
     */
    public function show(English $english)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\English  $english
     * @return \Illuminate\Http\Response
     */
    public function edit(English $english)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\English  $english
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, English $english)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\English  $english
     * @return \Illuminate\Http\Response
     */
    public function destroy(English $english)
    {
        //
    }
}
