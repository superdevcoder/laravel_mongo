<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd($request->api_token);
        $users = User::all();
        foreach ($users as $user) {
            if ($user->api_token == $request->api_token) {
                $employee = new Employee([
                    'id' => $request->get('id'),
                    'name' => $request->get('name'),
                    'no' => $request->get('no')
                ]);

                $employee->save();
                return response()->json([
                    'message' => 'Employee created',
                    'employee' => $employee
                ]);
            }
        }

        return response()->json([
            'message' => 'Unauthenticated user'
        ]);

        // return $employee;
    }

    public function update(Request $request, $id)
    {

        $users = User::all();
        foreach ($users as $user) {
            if ($user->api_token == $request->api_token) {
                $employee = Employee::where('id', $id)->first();
                $employee->name = $request->get('name');
                $employee->no = $request->get('no');
                $employee->id = $request->get('id');

                $employee->update();

                return response()->json([
                    'message' => 'Employee updated',
                    'employee' => $employee
                ]);
            }
        }

        return response()->json([
            'message' => 'Unauthenticated user'
        ]);
    }
}
