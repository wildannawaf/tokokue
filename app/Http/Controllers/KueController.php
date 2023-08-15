<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kue;

class KueController extends Controller
{
    public function index()
    {
        $kues = Kue::all();
        return view('kues.index', compact('kues'));
    }

    public function create()
    {
        return view('kues.create');
    }

    public function store(Request $request)
    {
        Kue::create($request->all());
        return redirect()->route('kues.index');
    }

    public function edit($id)
    {
        $kue = Kue::find($id);
        return view('kues.edit', compact('kue'));
    }

    public function update(Request $request, $id)
    {
        $kue = Kue::find($id);
        $kue->update($request->all());
        return redirect()->route('kues.index');
    }

    public function destroy($id)
    {
        $kue = Kue::find($id);
        $kue->delete();
        return redirect()->route('kues.index');
    }

}
