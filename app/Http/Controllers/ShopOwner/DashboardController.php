<?php

namespace App\Http\Controllers\ShopOwner;

use App\Http\Controllers\Controller;
use App\Models\Admin\Application;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function chooseDashboard($applicationId){
        $application = Application::findOrFail($applicationId);


        // Store the application data in the session
        session(['business_type' => $application->businessType->name]);

        return redirect()->back();
    }
}
