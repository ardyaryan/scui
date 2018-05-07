<?php

namespace App\Http\Controllers;

use App\Http\Models\TEST;
use App\Http\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function showELearning()
    {
        try{
            $userId = Session::get('user_id');
            if (!empty($userId)) {
                Log::info(__METHOD__ . '************ $userId ***************' . print_r($userId, 1));
                return View('e-learning', ['page' => 'e-learning']);
            } else {
                $user = User::find(2);
                Log::info(__METHOD__ . '************ $user ***************' . print_r($user, 1));

                return View('e-learning-login', ['page' => 'e-learning']);
            }
        } catch (\Exception $e) {
            Log::info(__METHOD__ . '************ $e ***************' . print_r($e, 1));
        }
    }
}