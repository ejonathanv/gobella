<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Mail\WelcomeNewSubscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewSubscriberNotification;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriberRequest $request)
    {
        $subscriber = new Subscriber();
        $subscriber->name = $request->name;
        $subscriber->email = $request->email;
        $subscriber->save();

        $this->notify_to_admin_about_new_subscriber($subscriber);

        $this->say_hi_to_new_subscriber($subscriber);

        return response()->json([
            'success' => true,
            'message' => 'Hey ' . $subscriber->name . ', thanks for subscribing to our newsletter. We have sent you a welcome email. Please check your inbox.',
        ]);
    }

    /**
     * Notifies the admin about a new subscriber.
     *
     * @param Subscriber $subscriber The subscriber object.
     * @return void
     */
    private function notify_to_admin_about_new_subscriber(Subscriber $subscriber)
    {
        try {
            Mail::to(env('ADMIN_EMAIL'))->send(new NewSubscriberNotification($subscriber));
        } catch (\Exception $e) {
            info('Failed to send email to admin about new subscriber.', ['error' => $e->getMessage()]);
        }
    }

    private function say_hi_to_new_subscriber(Subscriber $subscriber)
    {
        try {
            Mail::to($subscriber->email)->send(new WelcomeNewSubscriber($subscriber));
        } catch (\Exception $e) {
            info('Failed to send welcome email to new subscriber.', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscriberRequest $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}
