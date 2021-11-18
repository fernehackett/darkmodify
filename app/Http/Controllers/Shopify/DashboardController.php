<?php

namespace App\Http\Controllers\Shopify;

use App\Http\Controllers\Controller;
use App\Models\Background;
use App\Models\ScriptTag;
use App\Models\Store;
use Illuminate\Http\Request;
use PHPShopify\ShopifySDK;

class DashboardController extends Controller
{
    protected $api_key, $api_secret, $scope;

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $store = auth()->user()->store;
        $scriptTag = auth()->user()->script_tags()->where("name", "darkmode")->first();
        return view("shopify.dashboard.index", compact("store", "scriptTag"));
    }
}
