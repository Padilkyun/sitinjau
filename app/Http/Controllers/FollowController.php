<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    // Follow a user
    public function follow(Request $request, $id)
    {
        try {
            $user = Auth::user();
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 403);
            }

            $caleg = User::findOrFail($id);

            // Check if already following
            if ($user->follows()->where('followed_id', $caleg->id)->exists()) {
                return response()->json(['message' => 'You are already following this user.'], 400);
            }

            // Attach the relationship
            $user->follows()->attach($caleg->id);

            return response()->json(['message' => 'Followed successfully'], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'User not found.'], 404);
        } catch (\Exception $e) {
            \Log::error('Follow error: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while following the user.'], 500);
        }
    }

    // Unfollow a user
    public function unfollow($id)
    {
        try {
            $user = Auth::user();
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 403);
            }

            $caleg = User::findOrFail($id);

            // Check if already following
            if (!$user->follows()->where('followed_id', $caleg->id)->exists()) {
                return response()->json(['message' => 'You are not following this user.'], 400);
            }

            // Detach the relationship
            $user->follows()->detach($caleg->id);

            return response()->json(['message' => 'Unfollowed successfully'], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'User not found.'], 404);
        } catch (\Exception $e) {
            \Log::error('Unfollow error: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while unfollowing the user.'], 500);
        }
    }

    // Get followed users
    public function getFollowedUsers()
    {
        try {
            $user = Auth::user();
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 403);
            }

            $followedUsers = $user->followings()->pluck('followed_id');

            return response()->json($followedUsers, 200);
        } catch (\Exception $e) {
            \Log::error('Get Followed Users error: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while fetching followed users.'], 500);
        }
    }
}
