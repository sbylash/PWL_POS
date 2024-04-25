<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\m_user;
use Illuminate\Http\Request;

class POSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $useri = m_user::all();
        $level = LevelModel::all();
        return view('m_user.index', [
            'useri' => $useri,
            'level' => $level
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level = LevelModel::all();
        return view('m_user.create', ['level' => $level]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'level_id' => 'required',
        ]);

        m_user::create($request->all());
        return redirect()->route('m_user.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $useri = m_user::findOrFail($id);
        return view('m_user.show', compact('useri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $useri = m_user::find($id);
        $level = LevelModel::all();
        return view('m_user.edit', compact('useri', 'level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
        ]);

        $useri = m_user::find($id);
        $useri->update($request->all());
        return redirect()->route('m_user.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $useri = m_user::findOrfail($id)->delete();
        return redirect()->route('m_user.index')->with('success', 'User deleted successfully.');
    }
}
