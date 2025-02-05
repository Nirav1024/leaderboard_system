<?php

namespace App\Http\Controllers;

use App\Models\UserStats;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = UserStats::orderBy('points', 'desc')
                ->orderBy('wins', 'desc')
                ->orderBy('losses', 'asc')
                ->orderBy('lastactivity', 'desc')
                ->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('lastactivity', function ($user) {
                    return date($user->lastactivity);
                })
                ->addColumn('actions', function ($user) {
                    return "<a class='btn btn-info' href='" . route('show.data') . "/$user->user_id'>Show</a> <a class='btn btn-primary' href='" . route('edit.data') . "/$user->user_id'>Edit</a> <a onclick='return confirm(`Are you Sure`)' class='btn btn-danger' href='" . route('delete.data') . "/$user->user_id' >Delete</a>";
                })
                ->rawColumns(['actions', 'lastactivity'])
                ->make(true);
        }
        return view('dashboard');
    }
    public function create()
    {
        return view('leaderboard.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'points' => 'required|integer',
            'wins' => 'required|integer',
            'losses' => 'required|integer'
        ]);
        if ($validator->fails()) {
            return redirect()->route('create.data')->withErrors($validator)->withInput();
        } else {
            $user = new UserStats();
            $user->username = $request->username;
            $user->points = $request->points;
            $user->wins = $request->wins;
            $user->losses = $request->losses;
            $user->save();
            return redirect()->route('deshbord')->with('success', 'Your Data successfully Added');
        }
    }
    public function show()
    {
        $u_id = request()->segment(2);
        $data['user'] = UserStats::where('user_id', $u_id)->first();
        return view('leaderboard.view', $data);
    }
    public function edit()
    {
        $u_id = request()->segment(2);
        $data['user'] = UserStats::where('user_id', $u_id)->first();
        return view('leaderboard.edit', $data);
    }
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'points' => 'required|integer',
            'wins' => 'required|integer',
            'losses' => 'required|integer'
        ]);
        if ($validator->fails()) {
            return redirect()->route('edit.data')->withErrors($validator)->withInput();
        } else {
            UserStats::where('user_id', $request->id)->update([
                'username' => $request->username,
                'points' => $request->points,
                'wins' => $request->wins,
                'losses' => $request->losses,
                'lastactivity' => date("Y-m-d H:i:s", time()),
            ]);
            return redirect()->route('deshbord');
        }
    }
    public function delete()
    {
        $u_id = request()->segment(2);
        UserStats::where('user_id', $u_id)->delete();
        return redirect()->route('deshbord');
    }
}
