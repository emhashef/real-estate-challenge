<?php

namespace App\Http\Controllers;

use App\Events\PropertyAccepted;
use App\Events\PropertyChecking;
use App\Models\Property;
use App\Repositories\AreaRepository;
use App\Repositories\PropertyRepository;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    function __construct(PropertyRepository $property, AreaRepository $area)
    {

        $this->property = $property;
        $this->area = $area;
    }

    public function index(Request $request)
    {   
        //TODO: add this to permissions
        $properties = $request->user()->hasRole('admin') ? 
                        $this->property->all() : $this->property->userProperties(); 

        return view('property.list', [
            'properties' => $properties
        ]);
    }

    public function show(Request $request)
    {
        
    }

    public function create(Request $request)
    {
        return view('property.create', [
            'property_types' => Property::TYPES,
            'areas' => $this->area->all()
        ]);
    }

    public function store(Request $request)
    {
        $property = $this->property->create($request->toArray());

        PropertyChecking::dispatch($property);

        return redirect()->route('property.index');
    }

    public function accept(Request $request, Property $property)
    {
        $property->accept();

        PropertyAccepted::dispatch($property);

        return redirect()->route('property.index');
    }
}
