<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchByDate extends Controller
{
    public function records(Request $request)
    {
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $students = Kas::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $students = Kas::latest()->get();
                }
            } else {
                $students = Kas::latest()->get();
            }

            return response()->json([
                'students' => $students
            ]);
        } else {
            abort(403);
        }
    }
}
