<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class FullCalendarController extends Controller
{
    public function index(Request $request)
    {
        $data = Event::where('user_id', $request->user()->id)
            ->whereDate('start', '>=', $request->start)
            ->whereDate('end',   '<=', $request->end)
            ->get(['id', 'title', 'body', 'start', 'end']);

        return response()->json($data);
    }

    public function action(Request $request)
    {
        if ($request->type == 'add') {
            $event = new Event($request->all());
            $event->user_id = $request->user()->id;
            $event->save();

            return response()->json($event);
        }

        if ($request->type == 'update') {
            $event = Event::find($request->id);
            $event->fill($request->all());
            $event->save();

            return response()->json($event);
        }

        if ($request->type == 'delete') {
            $event = Event::find($request->id);
            $event->delete();

            return response()->json($event);
        }
    }
}
