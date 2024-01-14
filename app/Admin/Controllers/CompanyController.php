<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Company';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Company());

        $grid->column('id', __('Id'));
        $grid->column('email', __('Email'));
        $grid->column('password', __('Password'));
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
        $show = new Show(Company::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('email', __('Email'));
        $show->field('password', __('Password'));
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
        $form = new Form(new Company());

        $form->email('email', __('Email'));
        $form->password('password', __('Password'));

        return $form;
    }


    public function companyshow()
    {
        
    
        return view('jd.companyregister.register');
    }

    public function showLoginForm()
    {
        
    
        return view('jd.companylogin.login');
    }
    
    
    public function register(Request $request)
    {
        // Validate the request
        $request->validate([
            'phone' => 'required|unique:company', 
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new company
        $company = Company::create([
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
        ]);

        
        // Auth::login($company);

        // Redirect to a success page 
        return redirect('/company/login')->with('success', 'Company registered successfully!');
    }



}
