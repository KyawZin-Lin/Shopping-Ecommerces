<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ApplicationInterface;
use App\Models\Admin\Application;
use Illuminate\Support\Str;

class ApplicationRepository implements ApplicationInterface{
    public function getAllApplications()
    {
        return Application::paginate();
    }

    public function storeApplication()
    {

        $application = new Application();
        $application->name = request()->name;
        $application->user_id = request()->user_id;
        $application->business_type_id = request()->business_type_id;

        $application->application_key = Str::uuid();
        $application->save();

        $application->givePermissionTo(request()->permissions);
    }

    public function updateApplication(Application $application)
    {
        $application->name = request()->name;
        $application->user_id = request()->user_id;
        $application->business_type_id = request()->business_type_id;

        $application->update();

        $application->syncPermissions(request()->permissions);
    }
}
