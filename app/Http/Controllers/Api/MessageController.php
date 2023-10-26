<?php

namespace App\Http\Controllers\Api;


use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Message::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $request)
    {
        $validated = $request->validated();
        $message = Message:: create($validated);

        return $message;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Message::findOrfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function update(MessageRequest $request, string $id)
    {
        $validated = $request->validated();

        $message = Message::findOrfail($id);

        $message->update($validated);
        
        return $message;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::findOrfail($id);

        $message->delete();

        return $message;
    }
}
