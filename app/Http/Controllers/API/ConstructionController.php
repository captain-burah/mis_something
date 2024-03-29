<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteConstruction;
use App\Models\WebsiteConstructionImage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log; // send notifications via slack or any other means
use Illuminate\Support\Str;
use Cookie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade\Pdf;

class ConstructionController extends Controller
{
    public function index(){
        $resources = WebsiteConstruction::with('website_construction_images')->select('id', 'title', 'title_ar', 'description', 'description_ar', 'growth', 'slug_link', 'thumbnail', 'created_at', 'updated_at')->where('status', '1')->get();
        return response()->json($resources,200);
    }

    public function show($id){
        $resources = WebsiteConstruction::with('website_construction_images')->where('status', '1')->where('slug_link', $id)->get();
        return response()->json($resources,200);
    }
}
