<?php

namespace App\Http\Controllers;
use App\Models\Faketube;
use Illuminate\Http\Request;

class FaketubeController extends Controller
{
    public function getAlFaketubes()
    {
        $Faketubes =Faketube::orderBy('channelID', 'desc')->paginate(10);
        return view('Faketube.index', compact('Faketube'));
    }
    public function adFaketube()
    {
        return view('Faketube.add');
    }
    public function savFaketube(Request $request)
    {
    Faketube::create($request->all());
        return redirect()->route('Faketube.getAlFaketube');
    }
    public function ediFaketube($channelID)
    {
        $Faketube =Faketube::find('channelID');
        return view('Faketube.edit', compact('Faketube'));
    }
    public function updatFaketube(Request $request, $channelID)
    {
        $Faketube =Faketube::find('channelID');
        $Faketube->update($request->all());
        return redirect()->route('Faketube.getAlFaketubes');
    }
    public function deletFaketube($channelID)
    {
        $Faketube =Faketube::find('channelID');
        $Faketube->delete();
        return redirect()->route('Faketube.getAlFaketube');
    }
    public function shoFaketube($channelID)
    {
        $Faketube =Faketube::find('channelID');
        return view('Faketube.show', compact('Faketube'));
    }
}
