<?php

namespace App\Http\Controllers\Shopify;

use App\Models\ScriptTag;
use App\Models\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = auth()->user();
        $shop = $user->name;
        $store = Store::where("shopify_url", $shop)->first();
        if ($store) {
            if (!$request->has("enable"))
                $request->request->add(["enable" => 0]);
            if (!$request->has("schedule"))
                $request->request->add(["schedule" => 0]);
            if (!$request->has("customize"))
                $request->request->add(["customize" => 0]);
            $store->update($request->all());
        } else {
            $request->request->add(["shopify_url" => $shop]);
            Store::create($request->all());
        }
        return redirect()->to(route("home", ["notice" => "Saved!"]));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Store $store
     * @return Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Store $store
     * @return Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Models\Store $store
     * @return Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Store $store
     * @return Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
