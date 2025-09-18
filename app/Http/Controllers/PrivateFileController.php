<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PrivateFileController extends Controller
{
    public function downloadSubmission($filename)
    {
        if (!Auth::id()) {
            abort(403);
        }

        $path = storage_path('app/private/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }
}