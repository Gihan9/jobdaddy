<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController as BaseController;;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends BaseController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Experience';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Experience());

        $grid->column('id', __('Id'));
        $grid->column('job_title', __('Job title'));
        $grid->column('company_name', __('Company name'));
        $grid->column('s_date', __('Start_Date'));
        $grid->column('e_date', __('End_Date'));
        $grid->column('location', __('Location'));
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
        $show = new Show(Experience::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('job_title', __('Job title'));
        $show->field('company_name', __('Company name'));
        $show->field('s_date', __('Start_Date'));
        $show->field('e_date', __('End_Date'));
        $show->field('location', __('Location'));
       
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
        $form = new Form(new Experience());

        $form->text('job_title', __('Job title'));
        $form->text('company_name', __('Company name'));
        $form->text('s_date', __('Start_Date'));
        $form->text('e_date', __('End_Date'));
        $form->text('location', __('Location'));
       
        return $form;
    }


   

   
    public function sto()
{
    request()->validate([
        'job_title' => 'required|string|max:255',
        'company_name' => 'required|string|max:255',
        's_date' => 'required|string',
        'e_date' => 'required|string',
        'location' => 'required|string|max:255',
    ]);

    // Create a new experience for the authenticated user
    auth()->user()->experiences()->create([
        'job_title' => request()->input('job_title'),
        'company_name' => request()->input('company_name'),
        's_date' => request()->input('s_date'),
        'e_date' => request()->input('e_date'),
        'location' => request()->input('location'),
    ]);

    return redirect('/jd/profile')->with('success', 'Experience added successfully!');
}

    
   

    public function up()
    {
        
     

        request()->validate([
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            's_date' => 'required|date',
            'e_date' => 'nullable|date|after:start_date',
            'location' => 'required|string|max:255',
        ]);

        

        return redirect('/experiences')->with('success', 'Experience updated successfully!');
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();

        return redirect('/jd/profile')->with('success', 'Experience deleted successfully!');
    }

}
