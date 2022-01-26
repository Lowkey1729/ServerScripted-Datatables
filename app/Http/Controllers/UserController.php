<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Return the home page.
     *
     * @return mixed
     */
    public function index(){

        return view('welcome');
    }


    /**
     * This loads the data on the datatable.
     *
     * @return mixed
     */
    public function loadDatatable(Request $request){

        $draw = $request->get('draw');
        $start = $request->get("start");
        $row_per_page = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value


        $totalRecords = User::select('count(*) as all_count')->count();

        $totalRecordsWithFilter = User::where(function ($query) use ($searchValue){
                        $query->where('users.name', 'LIKE', '%' .$searchValue . '%')
                              ->orWhere('users.email', 'LIKE', '%' .$searchValue . '%')
                              ->orWhere('users.country', 'LIKE', '%' .$searchValue . '%')
                              ->orWhere('users.address', 'LIKE', '%' .$searchValue . '%')
                              ->orWhere('users.age', $searchValue)
                              ->orWhere('users.phone_number', $searchValue)
                              ->orWhereDate('users.created_at', $searchValue);
        })->count();

        $users = User::where(function ($query) use ($searchValue){
                        $query->where('users.name', 'LIKE', '%' .$searchValue . '%')
                              ->orWhere('users.email', 'LIKE', '%' .$searchValue . '%')
                              ->orWhere('users.country', 'LIKE', '%' .$searchValue . '%')
                              ->orWhere('users.address', 'LIKE', '%' .$searchValue . '%')
                              ->orWhere('users.age', $searchValue)
                              ->orWhere('users.phone_number', $searchValue)
                              ->orWhereDate('users.created_at', $searchValue);
        }) ->skip($start)
            ->take($row_per_page)
            ->get();

        $data_arr = [];
        $sno = $start+1;

        foreach ($users as $key=>$user){

            $data_arr[] = [
                'id' => $sno++,
                'name' => $user->name,
                'email' => $user->email,
                'age' => $user->age,
                'country' => $user->country,
                'user_id' => $user->id,
                'address' => $user->address,
                'phone_number' => $user->phone_number,
                'created_at' => Carbon::parse( $user->created_at)->format('F, Y'),
            ];
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordsWithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }

    /**
     * This loads the data on the datatable.
     *
     * @return mixed
     */
    public function userDetail() {


    }


}
