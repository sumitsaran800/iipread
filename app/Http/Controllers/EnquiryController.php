<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;
use App\Models\enquire;
use App\Models\course;

class EnquiryController extends Controller
{
    public function index()
    {
        $title = "Enquiry";
        $url = route('admin.frotend.enquiry.store');
        $btn = "Registraion ";
        $countries = Country::orderby('country_name', 'asc')->where('status', 1)->get();
        $course = course::orderby('course_title', 'desc')->where('status', 1)->get();
        $data = compact('title', 'btn', 'url', 'countries', 'course');
        return view('frotend/enquiry')->with($data);
    }

    public function store(Request $request)
    {

        $user = new enquire;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->contact = $request['contact'];
        $user->enquiry = $request['enquiry'];
        $user->gender = $request['gender'];
        $user->adress = $request['address'];
        $user->country_id = $request['country'];
        $user->state_id = $request['state'];
        $user->course_id = $request['course'];
        $user->save();
        return redirect()->back();
    }

    public function getState(Request $request)
    {
        $cid = $request['Cid'];
        $fetch = State::where(['country_id' => $cid])->get()->Toarray();
        $data = compact('fetch');
        return view('frotend/enquiry_state')->with($data);
    }

    public function view()
    {
        // $course = Enquire::with('course')->get()->toArray();
        // echo "<pre>";
        // print_r($course);
        // echo "</pre>";
        $title = "Enquiry View";
        $fetch = enquire::with([
            'course' => function ($q) {
                $q->select('course.id', 'course_title');
            },
            'country' => function ($q) {
                $q->select('countries.id', 'country_name');
            },
            'state' => function ($q) {
                $q->select('states.id', 'state_name');
            }
        ])->orderby('id', 'desc')->paginate(6);

        $data = compact('title', 'fetch');
        return view('frotend/admin/enquiry/enquiryview')->with($data);
    }
}