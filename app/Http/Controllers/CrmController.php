<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;

class CrmController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     */

    public function crmLogin()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return redirect(route('leadsList'));
        } else {
            return view('pages.crm.crmLogin');
        }
    }

    public function leadsList()
    {
        $leads = Lead::get();
        return view('pages.crm.leadsList', [
            'leads' => $leads
        ]);
    }
}
