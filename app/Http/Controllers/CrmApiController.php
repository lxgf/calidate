<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CrmApiController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
            return redirect(route('leadsList'));
        } else {
            return redirect()->back()
                ->withInput($request->only('email'))
                ->with('error', 'email is wrong');
        }
//        print_r($request->session());
    }

    public function createLead()
    {
        $lead = new Lead();

        $lead->name = '';
        $lead->surname = '';
        $lead->email = '';
        $lead->page = '';
        $lead->updated_at = Carbon::now()->toTimeString();
        $lead->created_at = Carbon::now()->toTimeString();

        $lead->save();
        return json_encode($lead);
    }

    public function getLeads()
    {
        return json_encode(
            Lead::get()
        );
    }

    public function updateLead(Request $request)
    {
        $lead = Lead::find($request->id);
        $col = $request->col;
        if (isset($request->value)) {
            $lead->$col = $request->value;
        } else {
            $lead->$col = '';
        }
        $lead->save();
        return json_encode($lead);
    }

    public function removeLead(Request $request)
    {
        return json_encode(Lead::destroy($request->id));
    }
}
