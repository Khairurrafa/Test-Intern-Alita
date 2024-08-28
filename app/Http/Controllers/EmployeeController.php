<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Location;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $filter_special = $request->input('filter_special'); 
        $sort_by = $request->input('sort_by', 'name');
        $order = $request->input('order', 'asc');
    
        $query = Employee::query();
    
        if ($search) {
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhereHas('location', function ($q) use ($search) {
                      $q->where('name', 'LIKE', "%{$search}%");
                  });
        }
    
        if ($filter_special) {
            $query->where('birth_date', '<=', now()->subYears(28))
                  ->whereHas('location', function ($q) {
                      $q->where('name', 'Jakarta');
                  });
        }
    
        $employees = $query->orderBy($sort_by, $order)->get();
    
        return view('employees.index', compact('employees', 'sort_by', 'order'));
    }
    

    public function create()
    {
        $locations = Location::all();
        return view('employees.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'birth_date' => 'required|date',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $locations = Location::all();
        return view('employees.edit', compact('employee', 'locations'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'birth_date' => 'required|date',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
