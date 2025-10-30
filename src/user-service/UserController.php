<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        return UserProfile::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $profile = UserProfile::findOrFail($id);
        $profile->update($request->all());
        return response()->json($profile);
    }
}
