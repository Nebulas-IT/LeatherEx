<?php

namespace App\Http\Controllers\Admin;

use App\HomeImage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_images = HomeImage::all();
        return view('backend.home_image.index', compact('home_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.home_image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $file->move('assets/home-images', $name);

        $data = array(
            'image_title' => $request->image_title,
            'image_url' => $name,
            'image_slug' => $request->image_slug,
            'image_position' => $request->image_position,
        );

        HomeImage::create($data);

        return redirect(route('admin.home-image.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home_image = HomeImage::findOrFail($id);
        return view('backend.home_image.edit', compact('home_image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $success = false;

        $home_image = HomeImage::findOrFail($id);

        $data = array(
            'image_title' => $request->image_title,
            'image_slug' => $request->image_slug,
        );

        $file = $request->file('image');
        if ($file) {
            $name = $file->getClientOriginalName();
            if ($home_image->image_url) {
                File::delete('assets/home-images/' . $home_image->image_url);
            }

            if ($file->move('assets/home-images', $name)) {
                $data['image_url'] = $name;
                $success = true;
            }
        }
        if ($home_image->update($data)) {
            $success = true;
        }
        return redirect(route('admin.home-image.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
