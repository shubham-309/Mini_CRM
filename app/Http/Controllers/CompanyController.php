<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::all();
        return view('admin.company.index', compact('company'));
    }

        /*Addind a New Comapny*/

    public function insert(Request $req)
    {
        $company = new Company();


        $company->name = $req->input('name');
        $company->email = $req->input('email');
        $company->website = $req->input('website');
        if($req->hasFile('logo'))
        {
            $file = $req->File('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/companylogo/',$filename);
            $company->logo = $filename;
        }
        $company->save();
        return redirect('/company')->with('status', "Company Added Succesfully");
    }

    public function add()
    {
        return view('admin.Company.add');
    }



    public function edit($id)
    {
        $company= Company::find($id);
        return view('admin.Company.edit', compact('company'));
    }

        /*Updating Comapny Data*/


    public function update(Request $req , $id){
        $company= company::find($id);
        $company->name = $req->input('name');
        $company->email = $req->input('email');
        $company->website = $req->input('website');
        if($req->hasFile('logo'))
        {
            $path= 'assets/uploads/companylogo/'.$company->logo;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $req->File('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/companylogo/',$filename);
            $company->logo = $filename;
        }
        $company->update();
        return redirect('/company')->with('status', "Company Updated Succesfully");
    }


        /*Deleting Comapny*/

    public function delete($id){
        $company= Company::find($id);
        if($company->logo)
        {
            $path= 'assets/uploads/companylogo/'.$company->logo;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $company->delete();
        return redirect('/company')->with('status', "Company Deleted Succesfully");
    }
}
