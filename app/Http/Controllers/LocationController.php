<?php
namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sort_by = $request->input('sort_by', 'name'); // default sort by name
        $order = $request->input('order', 'asc'); // default order is ascending
    
        $locations = Location::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('code', 'LIKE', "%{$search}%")
            ->orderBy($sort_by, $order)
            ->get();
    
        return view('locations.index', compact('locations', 'sort_by', 'order'));
    }
    

    // Show the form for creating a new resource
    public function create()
    {
        return view('locations.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:255|unique:locations,code',
            'name' => 'required|string|max:255',
        ]);

        Location::create($request->all());

        return redirect()->route('locations.index')->with('success', 'Location created successfully.');
    }

    // Display the specified resource
    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    // Show the form for editing the specified resource
    public function edit(Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'code' => 'required|string|max:255|unique:locations,code,' . $location->id,
            'name' => 'required|string|max:255',
        ]);

        $location->update($request->all());

        return redirect()->route('locations.index')->with('success', 'Location updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()->route('locations.index')->with('success', 'Location deleted successfully.');
    }
}
