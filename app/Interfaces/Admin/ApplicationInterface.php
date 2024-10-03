<?php

namespace App\Interfaces\Admin;

use App\Models\Admin\Application;

interface ApplicationInterface
{
    public function getAllApplications();
    public function storeApplication();
    public function updateApplication (Application $application);
}
