<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use App\Models\Company;


use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employe = Employe::all();
        return view('admin.Employees.index', compact('employe'));
    }

        /*Adding New Employee Data*/


    public function add()
    {
        $company= Company::all();
        return view('admin.Employees.add' , compact('company'));
    }

    public function insert(Request $req){

        $employe = new Employe();

        $employe->comp_id = $req->input('comp_id');

        $employe->name = $req->input('name');
        $employe->email = $req->input('email');
        $employe->phone = $req->input('phone');
        $employe->save();
        return redirect('/dashboard')->with('status', "Employe Added Succesfully");


    }

        /*Updating Employee Data*/


    public function edit($id){
        $employe = Employe::find($id);
        return view('admin.Employees.edit' , compact('employe'));
    }

    public function update(Request $req , $id)
    {
        $employe = Employe::find($id);

        $employe->name = $req->input('name');
        $employe->email = $req->input('email');
        $employe->phone = $req->input('phone');
        $employe->update();
        return redirect('/employe')->with('status', "Employe Updated Succesfully");

    }

        /*Deleting Employee Data*/

    public function delete($id){
        $employe= Employe::find($id);
        $employe->delete();
        return redirect('/employe')->with('status', "Employe Deleted Succesfully");
    }
}
