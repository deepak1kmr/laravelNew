<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Cockpit;
use App\Models\Agent;
use App\Models\LiveUrl;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return View::make('admin/dashboard');
    }

    public function cockpit_list()
    {
        $data = Cockpit::get();
        return View::make('admin/cockpit-list')->with("data",$data);
    }

    public function cockpit_create_page($id = null)
    {
        if($id) {
            $data = Cockpit::where("id",$id)->get();
            return View::make('admin/cockpit-create')->with('data', $data);
        } else {
            return View::make('admin/cockpit-create')->with('data', null);
        }
        
    }

    public function cockpit_create(Request $request,$id = null)
    {
        if($id) {
            $path = public_path();
            !is_dir($path) &&
                mkdir($path, 0777, true);
                $file = $request->images;
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path() ;
                $file->move($destinationPath,$fileName);
            Cockpit::where('id', $id)->update(
                [
                    "cock_name" => $request['cock_name'],
                    "height" => $request['height'],
                    "weight" => $request['weight'],
                    "endurance" => $request['endurance'],
                    "image" => $fileName
                ]
            );

            return redirect()->action("App\Http\Controllers\AdminDashboardController@cockpit_create_page",[$id])->with('success', 'Cockpit Details successfuly updated!');
        } else {

            $path = public_path();
            !is_dir($path) &&
                mkdir($path, 0777, true);
                $file = $request->images;
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path() ;
                $file->move($destinationPath,$fileName);
            
            Cockpit::create(
                [
                    "cock_name" => $request['cock_name'],
                    "height" => $request['height'],
                    "weight" => $request['weight'],
                    "endurance" => $request['endurance'],
                    "image" => $fileName
                ]
            );
    
            return redirect()->action([AdminDashboardController::class, 'cockpit_create_page'])->with('success', 'Cockpit Details successfuly created!');
        }
       
        
    }

    public function agent_list()
    {
        $data = Agent::get();
        return View::make('admin/agent_list')->with('data', $data);
    }

    public function agent_create_page($id = null)
    {
        if($id) {
            $data = Agent::where('id', $id)->get();
            return View::make('admin/agent-create')->with(["data" => $data, "id" => $id]);
        } else {
            return View::make('admin/agent-create');
        }
        
    }

    public function create_agent(Request $request, $id = null)
    {
        if($id) {
            $path = public_path();
            !is_dir($path) &&
                mkdir($path, 0777, true);
                $file = $request->images;
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path() ;
                $file->move($destinationPath,$fileName);
            Agent::where('id', $id)->update(
                [
                    "name" => $request['name'],
                    "address" => $request['address'],
                    "cellphone_number" => $request['cellphone_number'],
                    "commission_rate" => $request['commission_rate'],
                    "image" => $fileName
                ]
            );

            return redirect()->action("App\Http\Controllers\AdminDashboardController@agent_create_page",[$id])->with(['success' => 'Agent Details successfuly updated!']);
        } else {

            $path = public_path();
            !is_dir($path) &&
                mkdir($path, 0777, true);
                $file = $request->images;
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path() ;
                $file->move($destinationPath,$fileName);
            
            Agent::create(
                [
                    "name" => $request['name'],
                    "address" => $request['address'],
                    "cellphone_number" => $request['cellphone_number'],
                    "commission_rate" => $request['commission_rate'],
                    "image" => $fileName
                ]
            );
    
            return redirect()->action([AdminDashboardController::class, 'agent_create_page'])->with('success', 'Agent Details successfuly created!');
        }

    }

    public function live_page()
    {
        $data = LiveUrl::get();
        return View::make('admin/create-live-url')->with(['data' => $data]);
    }

    public function create_live(Request $request)
    {
        LiveUrl::where('id', 1)->update([
            'live_url' => $request['live_url']
        ]);
        return redirect()->action([AdminDashboardController::class, 'live_page'])->with('success', 'Live URL successfuly updated!');
    }

    public function matches_page()
    {
        $data = Cockpit::get();
        return View::make('admin/create-matches')->with(['data' => $data]);
    }

    public function create_match(Request $request)
    {

    }
}