<?php


use App\Http\Requests\LikeRequest;
use App\Http\Requests\UnlikeRequest;

class LikeController extends Controller
{
    public function show()
    {
        return view('like');
    }
    public function like(LikeRequest $request)
    {
        $request->user()->like($request->likeable());

        if ($request->ajax()) {
            return response()->json([
                'likes' => $request->likeable()->likes()->count(),
            ]);
        }

        return redirect()->back();
    }

    public function unlike(\Livewire\Request $request,UnlikeRequest $like)
    {
        $request->user()->unlike($request->likeable());

        if ($request->ajax()) {
            return response()->json([
                'likes' => $request->likeable()->likes()->count(),
            ]);
        }

        return redirect()->back();
    }
}
