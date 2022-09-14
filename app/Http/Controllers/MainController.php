<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function home(): \Illuminate\View\View
    {
        return view('pages.home');
    }

    public function prices(): \Illuminate\View\View
    {
        return view('pages.prices');
    }

    public function works(): \Illuminate\View\View
    {
        return view('pages.works');
    }

    public function techs(): \Illuminate\View\View
    {
        return view('pages.techs');
    }

    public function sendLead(Request $request): bool|string
    {
        $name = $request->name;
        $email = $request->email;

        if (isset($name) && isset($email)) {
            $new_lead = new Lead();

            $new_lead->name = $name;
            $new_lead->surname = $request->surname;
            $new_lead->email = $email;
            $new_lead->page = $request->page;
            $new_lead->updated_at = Carbon::now()->toTimeString();
            $new_lead->created_at = Carbon::now()->toTimeString();

            $new_lead->save();
            return json_encode(["redirect_url" => '/']);
        } else {
            abort(422);
        }
    }
}
