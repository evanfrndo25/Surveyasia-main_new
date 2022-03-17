<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChartResource;
use App\Models\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $title = "Chart";

    public function index()
    {
        $data = [
            'title' => $this->title,
            // 'charts' => ChartResource::collection(Chart::latest()->get())
            'charts' => Chart::get()
        ];
        
        return view('admin.chart.index', $data);
    }
    public function search(Request $request)
    {
        // $search = $request->search;
        // // dd($search);
        // if ($search = $request->search) {
        //     $Chart = DB::table('Chart')
        //         ->where('title', 'like', '%' . $search . '%')
        //         ->paginate();
        // } else {
        //     $Chart = Chart::latest()->paginate(2);
        // }
        // // ddd($Chart);

        // return view('admin.Chart.index', [
        //     'Chart' => $Chart
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        return view('admin.chart.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chart = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'chart_type' => 'required',
            'type' => 'required',
            'library_from' => 'required',
        ]);

        $chart['status'] = '0';
        $chart['supported_questions'] = 'Multiple options';
        $chart['default_configuration'] = '{"type":null,"data":null,"options":null}';
        // if ($request->file('img')) {
        //     $chart['img'] = $request->file('img')->store('chart-img');
        // }
        Chart::create($chart);
        return redirect('admin/chart/')->with('status', 'Success add Chart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chart  $Chart
     * @return \Illuminate\Http\Response
     */
    public function show(Chart $Chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chart  $Chart
     * @return \Illuminate\Http\Response
     */
    public function edit(Chart $chart)
    {
        $typeChart = Chart::select('type')->distinct()->get();
        
        return view('admin.chart.edit', [
            'title' => 'edit Chart',
            'chart' => $chart,
            'submit' => 'Update',
            'typeChart' => $typeChart
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chart  $Chart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chart = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'chart_type' => 'required',
            'status' => 'required',
            'img' => 'image|file|max:1024'
        ]);

        if ($request->file('img')) {
            if ($request->oldImg) {
                Storage::delete($request->oldImg);
            }
            $chart['img'] = $request->file('img')->store('chart-img');
        }
        Chart::where('id', $id)->update($chart);
        return redirect('admin/chart/')->with('status', 'Updated Chart success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chart  $Chart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chart $chart)
    {
        if ($chart->img) {
            Storage::delete($chart->img);
        }
        $chart->delete();
        return back()->with('status', 'Deleted Chart success');
    }
}
