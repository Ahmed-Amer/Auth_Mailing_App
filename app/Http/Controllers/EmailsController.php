<?php

namespace App\Http\Controllers;

use App\Mail\AttachmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function email()
    {
        Mail::to('elsheikh4440@gmail.com')->send(new AttachmentMail());
        return new AttachmentMail();
    }

}
