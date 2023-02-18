<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\TestEnrollment;

class TestEnrollmentController extends Controller
{


    public function sendNotification()
    {
        $user = User::findOrFail(auth()->user()->id);
        $enrllmentData = [
            'body' => 'You received a new notofication',
            'text' => 'this is notification body',
            'url' => '/'
        ];

        $user->notify(new TestEnrollment($enrllmentData));
    }
}
