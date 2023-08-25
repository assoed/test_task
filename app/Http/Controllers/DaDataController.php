<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use MoveMoveIo\DaData\Enums\BranchType;
use MoveMoveIo\DaData\Enums\CompanyType;
use MoveMoveIo\DaData\Facades\DaDataCompany;
class DaDataController extends Controller
{
    public function idExample(Request $request)
    {

        $id = $request->input('INN-input');

        $dadata = DaDataCompany::id($id, 1, null, BranchType::MAIN, CompanyType::LEGAL);

        return response()->json($dadata);
    }
}
