<?php
/**
 * Created by PhpStorm.
 * User: pawan
 * Date: 18/8/18
 * Time: 12:45 PM
 */

namespace Pawan\Vimeo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;
use Pawan\Vimeo\Models\VimeoVideo;

class VimeoController extends Controller
{
    public function index()
    {
        $videos = VimeoVideo::orderBy('id','desc')->paginate(10);
        return view('vimeo::listing', ['videos'=>$videos]);
    }

    public function create()
    {
        return view('vimeo::add');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'vimeo_url' => 'required|unique:vimeo_videos|max:200',
        ]);

        $url = 'https://vimeo.com/api/oembed.json?url='.$request->vimeo_url;

        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->request('GET', $url);
            if($res->getStatusCode() == '200')
            {
                $vimeo_response = json_decode($res->getBody());
                $vimeoVideo = new VimeoVideo();
                $vimeoVideo->vimeo_url = $request->vimeo_url;
                $vimeoVideo->title = $vimeo_response->title;
                $vimeoVideo->thumbnail = $vimeo_response->thumbnail_url;
                $vimeoVideo->save();
                return redirect(route('vimeolisting'));

            }
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            Session::flash('error_msg', 'Not a valid vimeo url.');
            return redirect(route('addvideo'));
        }


    }
}