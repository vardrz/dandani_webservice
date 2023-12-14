<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    public function index()
    {
        $mitras = Mitra::all();
        return response()->json($mitras);
    }

    public function add($account = null)
    {
        return view('addMitra', [
            'title' => 'Tambah Data Mitra',
            'akun' => $account
        ]);
    }

    public function search($key, $city, $district = null)
    {
        if ($district != null) {
            $mitra = Mitra::where("city", "like", "%" . $city . "%")->where("district", "like", "%" . $district . "%")->where(function ($q) use ($key) {
                $q->where("name", "like", "%" . $key . "%")->orWhere("desc", "like", "%" . $key . "%")->orWhere("specialist", "like", "%" . $key . "%");
            })->get();
        } else {
            $mitra = Mitra::where("city", "like", "%" . $city . "%")->where(function ($q) use ($key) {
                $q->where("name", "like", "%" . $key . "%")->orWhere("desc", "like", "%" . $key . "%")->orWhere("specialist", "like", "%" . $key . "%");
            })->get();
        }
        // @dd($mitra);

        if (count($mitra) > 0) {
            return response()->json($mitra);
        } else {
            return response()->json([["message" => "Search not found"]], 404);
        }
    }

    public function city(Request $req)
    {
        $mitra = Mitra::where("province", $req->province)->where("city", $req->city)->get();

        if (count($mitra) > 0) {
            return response()->json($mitra);
        } else {
            return response()->json([["message" => "Search not found"]], 404);
        }
    }

    public function district(Request $req)
    {
        $mitra = Mitra::where("province", $req->province)->where("city", $req->city)->where("district", $req->district)->get();

        if (count($mitra) > 0) {
            return response()->json($mitra);
        } else {
            return response()->json([["message" => "Search not found"]], 404);
        }
    }

    public function show($account = null)
    {
        $mitra = Mitra::where("account", $account)->get();

        // dd();
        if (count($mitra) == 1) {
            return response()->json($mitra);
        } else {
            return response()->json([["message" => "User not found"]], 404);
        }
    }

    public function store(Request $request)
    {
        $request->file('photo')->storeAs('mitra/', $request->account . '.' . $request->photo->extension());

        $data = [
            'account' => ucwords($request->account),
            'name' => ucwords($request->name),
            'specialist' => ucwords($request->specialist),
            'district' => ucwords($request->district),
            'city' => ucwords($request->city),
            'photo' => URL::to('/storage/mitra') . '/' . $request->account . '.' . $request->photo->extension(),
            'maps' => ucwords($request->maps),
        ];

        dd($data);
    }

    public function post(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'account'   => 'required',
            'name'   => 'required',
            'desc' => 'required',
            'specialist' => 'required',
            'whatsapp' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if (Mitra::where('account', $request->account)->count() > 0) {
            //duplicate data
            return response()->json([
                'success' => false,
                'message' => 'Mitra already in the database',
            ], 409);
        } else {
            //save to database
            $post = Mitra::create([
                "account" => $request->account,
                "name" => $request->name,
                "desc" => $request->desc,
                "specialist" => $request->specialist,
                "whatsapp" => $request->whatsapp,
                "province" => $request->province,
                "city" => $request->city,
                "district" => $request->district,
                "maps" => $request->maps,
                "photo" => url('/') . "/image/default.jpg"
            ]);

            //success save to database
            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Mitra saved',
                    'data'    => $post
                ], 201);
            } else {
                //failed save to database
                return response()->json([
                    'success' => false,
                    'message' => 'Mitra Failed to Save',
                ], 409);
            }
        }
    }

    public function put(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'account'   => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //update query
        if ($request->photo == null) {
            $post = Mitra::where("account", $request->account)->update([
                "name" => $request->name,
                "desc" => $request->desc,
                "specialist" => $request->specialist,
                "whatsapp" => $request->whatsapp,
                "province" => $request->province,
                "city" => $request->city,
                "district" => $request->district,
                "maps" => $request->maps,
            ]);
        } else {
            $post = Mitra::where("account", $request->account)->update([
                "photo" => $request->photo
            ]);
        }

        //success save to database
        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Mitra updated',
            ], 201);
        }

        //failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Mitra Failed to update',
        ], 409);
    }
}
