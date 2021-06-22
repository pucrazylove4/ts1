<?php

namespace App\Http\Controllers;
use App\Http\Requests\CustomerContact;
use Illuminate\Http\Request;
use App\Models\Customer;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class CustomerController extends Controller
{
    //
    public function customer(){
        $title = 'Customer Create Account';
        return view('user.informationform',['title' => $title]);
    }
    public function login(){
        return view('user.loginform');
    }
    public function getDB(Request $req){
            // if(Auth::attempt(['name' =>$req->get('name'),'email' =>$req->get('email'),'birth' =>$req->get('birth'),
            // 'address' =>$req->get('address'),'gender' =>$req->get('gender')])){
            //     return response()->json([
            //         'message' => 'Success',
            //         'status' => 200
            //     ],200);
            // }else{
            //     return response()->json([
            //         'message' => 'Incorrect',
            //         'status' => 400
            //     ],400);
            // }
                // $name = $req->input('name');
                // $email = $req->input('email');
                // $birth = $req->input('birth');
                // $address = $req->input('address');
                // $gender = intval($req->input('gender'));

                $message = [
                    'name.required' => 'Bắt buộc',
                    'email.required' =>'Bắt buộc',
                    'password.required' =>'Bắt buộc',
                    'birth.required' =>'Bắt buộc',
                    'address.required' =>'Bắt buộc'  
                ];

                $validator = Validator::make($req->all(),[
                    'name' =>'required|min:3|max:30',
                    'email' =>'required|email|unique:users_infomation',
                    'password'=>'required|confirmed|min:6|max:16',
                    'birth' =>'required|date_format:d/m/Y',
                    'address' =>'required|max:255'
            
                ],$message);
                
                if ($validator->passes()){
                    $usave = Customer::Create(['name' =>$req->name, 'email' =>$req->email, 'password' =>Hash::make($req-> password),'birth' =>$req->birth, 'address' =>$req->address, 'gender' =>$req->gender]);
                    return response()->json(['success'=>'Tạo Thành Công']);

                }else{
                    return response()->json(['error'=>$validator->errors()]);
                    }
           
             }
   
    public function logincheck(Request $r){
 
        $r -> validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:16'
        ]);
        $customerinfo = Customer::where('email','=', $r -> email)->first();
        if(!$customerinfo){
            return back()->with('fail','Email không tồn tại');
        }else{
            // check password
            if(Hash::check($r -> password, $customerinfo -> password)){
                $r->session()->put('LoggedUser',$customerinfo->id);
                return redirect('/welcome');
            }else{
                return back()->with('fail','Sai mật khẩu');
            }
        }
    }
    
    public function welcomeDashBoard(){
        $data = ['LoggedUserInfo'=>Customer::where('id','=', session('LoggedUser'))->first()];
        return view('user.dashboarduser',$data  );
    }
    public function LogoutUsers(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }
    
}
