<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('reports.index', [
            'reports' => $request->user()->reports()->paginate(12),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response('Not Implemented', 501);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request)
    {
        $this->authorize('create', Report::class);
        $request->validate([
            'progress' => 'required',
        ]);

        $report = $request->user()->reports()->create($request->all());

        return response()->redirectToRoute('reports.show', $report);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return response('Not Implemented', 501);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return response('Not Implemented', 501);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Report $report
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, Report $report)
    {
        $this->authorize('update', $report);

        $request->validate([
            'progress' => 'filled',
        ]);

        $report->fill($request->all())->save();

        return response()->redirectToRoute('reports.show', $report);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report $report
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Report $report)
    {
        $this->authorize('delete', $report);
        $report->delete();
        return response()->redirectToRoute('reports.index');
    }
}
