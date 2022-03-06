<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\AuthRepoInterface;
use App\Http\Requests\AuthLoginRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Response;
use Tymon\JWTAuth\Exceptions\JWTException;
class AuthRepo extends AbstractRepo implements AuthRepoInterface
{
    use AuthenticatesUsers;

    protected function credentials(AuthLoginRequest $request)
    {
        return [
            'uid' => $request->get('username'),
            'password' => $request->get('password'),
        ];
    }

    public function username()
    {
        return 'userName';
    }

    public function __construct()
    {

        parent::__construct(User::class);

    }

    public function login(array $data)
    {
        try {
            $userphone=User::where("phone",$data['phone'])->first();
            if($userphone && Hash::check($data['password'],$userphone->password)){
                $user=$userphone;
            }else{
//                dd(\App::getLocale());
                return responseFail(__('app.could_not_find_user'), 401);
            }
            if (! $token = JWTAuth::fromUser($user)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid Phone or Password',
                ], 400);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Retrieved successfully',
                    'access_token' => $token,
                    'token_type' => 'bearer',
                    'expires_in' => auth('api')->factory()->getTTL()
                ]);
            }
        } catch (JWTException $e) {
            return response()->json([
                'success' => false,
                'message' => 'could_not_create_token',
            ], 500);
        }


    }

    public function logout($request)
    {

        return $request->user()->token()->revoke();
    }

    public function currentUser()
    {
        return Auth::user();
    }

    public function register(array $data)
    {
        unset($data['password_confirmation']);
        $data['password']= Hash::make($data['password']);
       return User::create($data);
    }
}
