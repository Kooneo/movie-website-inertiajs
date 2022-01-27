<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Inertia\Inertia;

class TagController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Admin/Tags/Index', [
            'tags' => Tag::query()
                ->when($request->input('search'), function ($query, $search) {

                    $query->where('tag_name', 'like', "%{$search}%");
                })
                ->paginate($request->perPage ?? 5 )->withQueryString(),
            'filters' => $request->only(['search', 'perPage'])
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Tags/CreateTag');
    }


    public function store(Request $request)
    {
        // TODO: Create Request Classes
        $tagName = $request->tagName;
        Tag::query()->create([
           'tag_name' => $tagName,
           'slug' => Str::slug($tagName)
        ]);

        return Redirect::route('admin.tags.index')->with('flash.banner', 'Tag Created.');
    }
}
