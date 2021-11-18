<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Inventory;
use App\Models\Logs;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Flash;
use Response;

class PostController extends Controller {
    public $successStatus = 200;

    public function getAllPosts(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null){
            $inventory = Inventory::all();

            return response()->json($inventory, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
        
    }
    public function getPost(Request $request){
            $id = $request['pid']; // pid = post id 
            $token = $request['t']; // t = token
            $userid = $request['u']; // u = userid
    
            $user = User::where('id', $userid)->where('remember_token', $token)->first();
    
            if ($user != null){
                $inventory = Inventory::where('id', $id)->first();
    
                if ($inventory != null){
                    return response()->json($inventory, $this->successStatus);
                } else {
                    return response()->json(['response' => 'Post not found'], 404);
                }
            } else {
                return response()->json(['response' => 'Bad Call'], 501);
            }
    }
    public function searchPost(Request $request){
        $params = $request['p']; // p = params
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null){
            $inventory = Inventory::where('record', 'LIKE', '%' . $params . '%')
            ->orWhere('productname', 'LIKE', '%' . $params . '%')
            ->get();
// SELECT * FROM posts WHERE record LIKE '%params%' OR productname LIKE '%params%' 
            if ($inventory != null){
                return response()->json($inventory, $this->successStatus);
            } else {
                return response()->json(['response' => 'Post not found'], 404);
            }
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }
} 
}








