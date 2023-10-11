<?php

namespace Modules\Project\Http\Controllers;

use App\Models\Client;
use App\Models\Payment;
use App\Models\Project;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('project::index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('project::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $project = Project::create([
                'title' => $request->title,
                'thumbnail' => $request->thumbnail,
                'description' => $request->description,
                'price' => $request->price,
                'deadline' => $request->deadline,
                'status' => $request->status,
            ]);

            $client = Client::create([
                'clientable_type' => Project::class,
                'clientable_id' => $project->id,
                'name' => $request->client_name,
                'phone' => $request->client_phone,
                'email' => $request->client_email
            ]);

            $downpayment = Payment::create([
                'paymentable_type' => Project::class,
                'paymentable_id' => $project->id,
                'type' => Payment::DOWN_PAYMENT,
                'value' => $request->down_payment,
                'status' => Payment::PENDING,
            ]);

            $repayment = Payment::create([
                'paymentable_type' => Project::class,
                'paymentable_id' => $project->id,
                'type' => Payment::REPAYMENT,
                'value' => $request->repayment,
                'status' => Payment::PENDING,
            ]);

            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
        }

        return redirect()->route('management.project.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function overview(Project $project)
    {
        return view('project::overview', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('project::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
