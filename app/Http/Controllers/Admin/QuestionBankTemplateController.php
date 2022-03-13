<?php

namespace App\Http\Controllers\Admin;

use App\Action\CreateQuestionBankAction;
use App\Http\Controllers\Controller;
use App\Models\QuestionBankSubTemplate;
use App\Models\QuestionBankTemplate;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionBankTemplateController extends Controller
{
    //
    public $title = "Question Bank";

    public function index()
    {

        $language_active = QuestionBankSubTemplate::where('status', '=', '1')->first()->language_id;

        // $questionbank_sub_templates_ing = QuestionBankSubTemplate::with('template')->where('language_id', '=', 0)->get();
        // $questionbank_sub_templates_ind = QuestionBankSubTemplate::with('template')->where('language_id', '=', 1)->get();
        $questionbank_sub_templates_act = QuestionBankSubTemplate::with('template')->where('language_id', '=', $language_active)->get();
        $questionbank_templates = QuestionBankTemplate::get();
        $id = QuestionBankSubTemplate::with('template')->whereId('id')->get();


        // $totalQuestion = QuestionBankSubTemplate::with('questions')->first()->questions->count();

        $data = [
            // 'questionbank_sub_templates_ing' => $questionbank_sub_templates_ing,
            // 'questionbank_sub_templates_ind' => $questionbank_sub_templates_ind,
            'questionbank_sub_templates_act' => $questionbank_sub_templates_act,
            'questionbank_templates' => $questionbank_templates,
            'question_bank_id' => $id,
            'language_active' => $language_active,
            'title' => $this->title,
        ];
        return view('admin.questionbank.index', $data);
    }

    public function setLanguage()
    {

        try {
            QuestionBankSubTemplate::where('language_id', '=', $_GET['language'])->update(['status' => 1]);
            QuestionBankSubTemplate::where('language_id', '!=', $_GET['language'])->update(['status' => 0]);
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }

        return redirect()->back();
    }

    public function show(QuestionBankSubTemplate $questionbank)
    {
        $questions = Question::where('question_bank_id', $questionbank->id)->get();
        // $questions = Question::where('question_bank_id', $questionbank)->get();
        // $questionbank_sub_templates = QuestionBankSubTemplate::with('template')->whereId($questionbank_sub_template)->get();

        $data = [
            'title' => $this->title,
            'questionbank' => $questionbank,
            'questions' => $questions,
            'url' =>  route('subtemplates.show', $questionbank),
            'title' => $this->title,
        ];

        // dd($questionbank);
        // dd(Question::where('question_bank_id', 44)->get());

        return view('admin.questionbank.show', $data);
    }

    public function storeQuestions(Request $request)
    {
        $action = new CreateQuestionBankAction();
        $action->alternate($request);
        return redirect('admin/questionbank/')->with('status', 'Success add questions!');
    }
    public function store(Request $request)
    {
        $question_sub_template = $request->validate([
            'sub_template_name' => 'required',
            'question_bank_template_id' => 'required',
            'goals' => 'required',
            'aktivitas' => 'required',
            'language_id' => 'required'
        ]);

        // $question_sub_template['status'] = '0';

        $language_active = QuestionBankSubTemplate::where('status', '=', '1')->first()->language_id;
        $status = ($language_active == $request->language_id);

        QuestionBankSubTemplate::create([
            'sub_template_name' => $request->sub_template_name,
            'question_bank_template_id' => $request->question_bank_template_id,
            'goals' => $request->goals,
            'aktivitas' => $request->aktivitas,
            'status' => $status,
            'language_id' => $request->language_id
        ]);
        return redirect('admin/questionbank/')->with('status', 'Success add sub template!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionBankSubTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $questionbank_templates = QuestionBankTemplate::get();
        $data = QuestionBankTemplate::find($id);
        $questionbanktemp = QuestionBankSubTemplate::where('id', $id)->get();
        $title = $this->title;
        return view('admin.questionbank.edit', compact('questionbank_templates', 'id', 'data', 'questionbanktemp', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuestionBankSubTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->title);
        $sub_template_name = $request->validate([
            'sub_template_name' => 'required',
            'question_bank_template_id' => 'required',
            'goals' => 'required',
            'status' => 'required',
            'aktivitas' => 'required',
            'language_id' => 'required'
        ]);



        //$sub_template_name['status'] = '0';
        //$sub_template_name['question_bank_template_id'] = '1';



        QuestionBankSubTemplate::where('id', $id)->update($sub_template_name);

        return redirect('admin/questionbank/')->with('status', 'Update sub template success');
    }

    public function destroy($id_questionbank)
    {

        $questionbank_templates = QuestionBankSubTemplate::find($id_questionbank)->delete();
        return back()->with('status', 'Deleted sub template success');
    }
}
