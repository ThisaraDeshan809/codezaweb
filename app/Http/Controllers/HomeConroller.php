<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactMessages;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeConroller extends Controller
{
    public function aboutUsPage()
    {
        return view('about-us');
    }

    public function contactUsPage()
    {
        return view('contact-us');
    }

    public function storeContactMessages(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            DB::beginTransaction();

            ContactMessages::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ]);

            DB::commit();

            return response()->json(['success' => true, 'message' => 'Your message has been sent.Our Team will response you soon. Thank you!']);

        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
