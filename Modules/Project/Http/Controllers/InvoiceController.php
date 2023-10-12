<?php

namespace Modules\Project\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('project::Invoice.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(Project $project)
    {
        $storeLink = route('management.project.invoice.store', $project);
        return view('project::Invoice.create', compact('storeLink'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Project $project, Request $request)
    {
        DB::beginTransaction();
        try {
            $count = Invoice::whereYear('created_at', Carbon::now()->year)->count();
            $code = 'OMNI/INV/'.Carbon::now()->year.'/'.sprintf('%06d', $count);

            $invoice = Invoice::create([
                'invoiceable_type' => Project::class,
                'invoiceable_id' => $project->id,
                'code' => $code,
                'status' => Invoice::WAITING_PAYMENT
            ]);



            foreach ($request->name as $key => $name){
                InvoiceItem::create([
                    'invoiceable_type' => Invoice::class,
                    'invoiceable_id' => $invoice->id,
                    'name' => $request->name[$key],
                    'description' => $request->description[$key],
                    'qty' => $request->qty[$key],
                    'price' => $request->price[$key],
                ]);
            }

            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
        }

        return redirect()->route('management.project.overview', $project);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('project::show');
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
