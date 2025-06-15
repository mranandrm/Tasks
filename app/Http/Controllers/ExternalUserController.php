<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalUserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        try {
            $response = Http::get('https://jsonplaceholder.typicode.com/users');

            if ($response->failed()) {
                throw new \Exception('API request failed.');
            }

            $users = $response->json();

            if ($search) {
                $users = array_filter($users, function ($user) use ($search) {
                    return stripos($user['name'], $search) !== false;
                });
            }

            return view('frontend.external-users.index', [
                'users' => $users,
                'search' => $search,
            ]);
        } catch (\Exception $e) {
            return view('frontend.external-users.index', [
                'users' => [],
                'search' => $search,
                'error' => $e->getMessage()
            ]);
        }
    }
}
