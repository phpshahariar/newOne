<?php

namespace App\Http\Controllers\Admin;

use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $packages = Package::orderBy('id', 'desc')->get();
        return view('admin.packages.packages', compact('packages'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $packages = Package::create([
            'title'         => $request->title,
            'service'       => $request->service,
            'duration'      => $request->duration,
            'price'         => $request->price,
            'orders'        => $request->orders,
            'icon'          => $request->icon,
            'details'       => json_decode($request->details),
            'created_by'    => Auth::guard('admin')->user()->id,
            
        ]);

        return response()->json($packages);

        
        
    }

    public function edit ($id)
    {
        $packages = Package::find($id);
        return response()->json($packages);
    }

    public function update (Request $request, \App\Package $package)
    {
        $package->update([
            'title'         => $request->title,
            'service'       => $request->service,
            'duration'      => $request->duration,
            'price'         => $request->price,
            'orders'        => $request->orders,
            'icon'          => $request->icon,
            'details'       => json_decode($request->details),
            'created_by'    => Auth::guard('admin')->user()->id,
        ]);
        return response()->json(['message'=>'Package update successful']);
    }

    public function active($id)
    {
        $approved = Package::find($id);
        $approved->status = 1;
        $approved->save();
        return redirect()->back()->with('message', 'Package has been Active');

    }

    public function inactive($id)
    {
        $revoke = Package::find($id);
        $revoke->status = 0;
        $revoke->save();
        return redirect()->back()->with('message', 'Package has been Inactive');

    }

    public function delete($id)
    {
        $packages_delete = Package::find($id);
        $packages_delete->delete();
        return redirect()->back()->with('message', 'Package has been Deleted');
    }
}
