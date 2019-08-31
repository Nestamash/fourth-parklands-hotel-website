<?php

namespace App\Http\Controllers;
use App\hotelGallery;
use Illuminate\Http\Request;

class HotelGalleryController extends Controller
{
    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */

    public function datepicker()
    {

        return view('datepicker');
    }
    public function index()
    {
        $hotel = hotelGallery::get();
        return view('hotel-gallery',compact('hotel'));
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $input['image']);


        $input['title'] = $request->title;
        hotelGallery::create($input);


        return back()
            ->with('success','Image Uploaded successfully.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        hotelGallery::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');
    }
}
