<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Companyqa;
use Illuminate\Http\Request;
class CompanyqaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Companyqa';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Companyqa());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('Company id'));
        $grid->column('question', __('Question'));
        $grid->column('answer', __('Answer'));
        $grid->column('col1', __('Col1'));
        $grid->column('col2', __('Col2'));
        $grid->column('col3', __('Col3'));
        $grid->column('col4', __('Col4'));
        $grid->column('col5', __('Col5'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Companyqa::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('company_id', __('Company id'));
        $show->field('question', __('Question'));
        $show->field('answer', __('Answer'));
        $show->field('col1', __('Col1'));
        $show->field('col2', __('Col2'));
        $show->field('col3', __('Col3'));
        $show->field('col4', __('Col4'));
        $show->field('col5', __('Col5'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Companyqa());

        $form->text('company_id', __('Company id'));
        $form->text('question', __('Question'));
        $form->text('answer', __('Answer'));
        $form->text('col1', __('Col1'));
        $form->text('col2', __('Col2'));
        $form->text('col3', __('Col3'));
        $form->text('col4', __('Col4'));
        $form->text('col5', __('Col5'));

        return $form;
    }

    public function so()
    {
        $companyQnAs = auth()->user()->companyQnAs;
       
        return view('jd.companyprofile.company', compact('companyQnAs'));
    }

    public function createqa()
    {
        return view('company-qna.create');
    }

    public function storeqa(Request $request)
    {
        $request->validate([
            'question' => 'required',
            // Add other validation rules as needed
        ]);

        $companyQnA = Companyqa::create([
            'user_id' => auth()->user()->id,
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('company.profile.form')->with('success', 'Question and answer added successfully!');
    }

    public function editqa(Companyqa $companyQnA)
    {
        return view('company-qna.edit', compact('companyQnA'));
    }

    public function updateqa(Request $request, Companyqa $companyQnA)
    {
        $request->validate([
            'question' => 'required',
            // Add other validation rules as needed
        ]);

        $companyQnA->update([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('company.profile.form')->with('success', 'Question and answer updated successfully!');
    }

    public function destroyqa($id)
    {
        
        $qna = Companyqa::findOrFail($id);
        $qna->delete();


        return redirect()->route('company.profile.form')->with('success', 'Question and answer deleted successfully!');
    }
}
