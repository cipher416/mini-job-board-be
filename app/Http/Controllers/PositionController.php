<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $positions = Auth::user()->company->positions;
        return response()->json($positions);
    }

    public function search(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        // Query the Position model
        $positions = Position::where('job_title', 'like', '%' . $validated['job_title'] . '%')
            ->where('location', 'like', '%' . $validated['location'] . '%')
            ->orderBy('is_mock_data', 'asc')
            ->get();

        // Return the results as a JSON response
        return response()->json($positions);
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'job_type' => 'required|in:full-time,part-time,contract',
            ]);
        $company = Auth::user()->company;
        $company->positions()->create(
            $validated
        );
//        Position::create(array_merge($validated, ['company_id' => $companyId]));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'job_type' => 'required|in:full-time,part-time,contract',
        ]);


        $position = Position::find($id);


        if (!$position) {
            return response()->json(['error' => 'Position not found'], 404);
        }

        $position->update($validated);

        return response()->json(['message' => 'Position updated successfully', 'position' => $position], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $position = Position::find($id);
        if (!$position) {
            return response()->json(['error' => 'Position not found'], 404);
        }
        $position->delete();
        return response()->json(['message' => 'Position deleted successfully'], 200);
    }
}
