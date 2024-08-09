<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Customer;
use App\Models\Property;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getNotifications()
    {
        $notifications = Notification::all();
        return view('notifications', compact('notifications'));
    }
    
    public static function createNotification(Customer $customer, Property $property)
    {
        // Create a new notification instance
        $notification = new Notification();
        $notification->customer_id = $customer->id;
        $notification->property_id = $property->id; // Set the property_id field
        $notification->message = "New customer {$customer->nama} has registered and booked {$property->name}.";
        $notification->save();
    
        return $notification;
    }
}
