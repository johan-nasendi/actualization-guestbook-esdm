<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = GuestBook::orderBy('id','DESC')->paginate(6);
        return view('admin.guest-book.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:100',
            'mobile_phone_number' => 'required|numeric|min:14|unique:guests,mobile_phone_number',
            'institution' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'necessities' => 'required|string|max:200',
            'dates' => 'required|date',
            'times' => 'required|string',
      ]);

    try {
        $guestbook = new GuestBook();
        $guestbook->name = $request->name;
        $guestbook->institution = $request->institution;
        $guestbook->position = $request->position;
        $guestbook->necessities = $request->necessities;
        $guestbook->dates = $request->dates;
        $guestbook->times = $request->times;
        $guestbook->slug = Str::slug($request->get('name'));
        $guestbook->mobile_phone_number = $request->mobile_phone_number;
        $guestbook->status = $request->status;
        $guestbook->save();
          Alert::success('Success', 'Data Anda Berhasil Dikirim');
          return redirect('/');
        } catch (\Throwable $th) {
          Alert::error('Error','Data Anda Gagal Dikirim', ['error' => $th->getMessage()]);
        } return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guestbook = GuestBook::where('slug', $id)->first();
        return view('admin.guest-book.details',compact('guestbook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $guestbook = GuestBook::find($id);
            $guestbook->delete();
            Alert::success('Success', 'Berhasil Dihapus');
            return redirect()->back();
        }catch (\Throwable $th) {
            Alert::error('Failed','Gagal Dihapus', ['error' => $th->getMessage()]);
        }
        return redirect()->back();
    }
}
