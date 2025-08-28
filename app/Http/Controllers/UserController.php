<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // query all inventories from the database
        $users = User::latest()->get();

        // return the view with $inventories data
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//DB::enableQueryLog();
        //dd($request->all());
         $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
    ]);

    // Simpan ke database
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
//dd(DB::getQueryLog());
    return redirect()->route('user.index')->with('success', 'Pengguna berjaya ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // dd( $inventory);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $user = User::findOrFail($id);
        $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'email_verified_at' => $request->email_verified_at,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('user.index')->with('success', 'Pengguna berjaya dikemaskini.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    // Cari rekod ikut ID
    $user = User::findOrFail($id);

    // Padam rekod
    $user->delete();

    // Redirect balik dengan mesej berjaya
    return redirect()->route('user.index')->with('success', 'Pengguna berjaya dipadam.');
}

}
