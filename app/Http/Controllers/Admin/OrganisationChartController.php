<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrganisationChartController extends Controller
{
    public function organisationchart()
    {
        return view('admin.organisationchart.index');
    }

    public function orgchart()
    {
        return view('admin.organisationchart.orgchart');
    }

    public function d3orgchart()
    {
        return view('admin.organisationchart.d3orgchart');
    }

}
