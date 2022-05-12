<?php

namespace App\Http\Controllers;

use App\Events\NewsLetterSubscription;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function __construct()
    {
        $message = 'Hey you just got subscribed to our Newsletter';
        event( new NewsLetterSubscription($message) );
    }
}
