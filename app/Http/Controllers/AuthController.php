<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        //check NV hay KH
        $accType = DB::table('users')->select('idchucvu')->where('username', $request['username'])->get();
        if ($request['page'] === "admin") {
            if ($accType[0]->idchucvu === "KH") {
                $arr=[
                    'status' => false,
                    'message' => 'Tài khoản thuộc trang Admin',
                    'data' => []
                ];
                return response()->json($arr, 401);
            }
        } else {
            if (!($accType[0]->idchucvu === "KH")) {
                $arr=[
                    'status' => false,
                    'message' => 'Tài khoản thuộc trang Người dùng',
                    'data' => []
                ];
                return response()->json($arr, 401);
            }
        }

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        }

        $credentials = [
            'username' => $request['username'],
            'password' => $request['password']
        ];
        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(Request $request)
    {
        $credentials = request(['email', 'username', 'password']);
        $credentials['password'] = bcrypt($credentials['password']);
        User::create($credentials);

        return response()->json('Đăng ký thành công');
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Đăng xuất thành công']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL()*60,
            'user' => auth()->user()
        ]);
    }

    // public function forgetPassword(Request $request)
    // {
    //     try {   
    //         $user = User::where('email', $request['email'])->get();
    //         if (count($user) > 0) {

    //             $token = Str::random(40);
    //             $domain = URL::to('/');
    //             $url = $domain.'/reset-password?token='.$token;

    //             $data['url'] = $url;
    //             $data['email'] = $request['email'];
    //             $data['title'] = 'Xác nhận email';
    //             $data['body'] = 'Click vào link dưới để reset password';

    //             Mail::send('forgetPasswordMail', ['data' => $data], function($message) use ($data){
    //                 $message->to($data['email'])->subject($data['title']);
    //             });

    //             $user = User::find($user[0]['idtaikhoan']);
    //             $user->$remember_token = $random
    //         } else {
    //             return response()->json(['success' => false, 'message' => 'Không tìm thấy user']);
    //         }
    //     } catch (Throwable $e) {
    //         return response()->json(['success' => false, 'message' => $e->getMessage()]);
    //     }
    // }
}
