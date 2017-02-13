<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Flash;
use Lang;
use DB;
use Validator;
//use Session;

use App\Country;


class CountryController extends Controller
{
    public function __construct()
    {
//        $this->middleware('1');
//        Entrust::hasRole('admin');
    }

    public function index()
    {
        $lang =  strtoupper(Lang::getLocale());

        //$countries = Country::all();
        $countries = DB::table('Countries')
            ->select('pkCountriesID','countriesName'.$lang, 'countriesStatus')
            ->paginate( 20 );

//        flash()->overlay('Modal Message', 'Modal Title');
        return view('accounts.countries.index', ['countries' => $countries, 'lang'=> $lang]);
    }

    public function create()
    {
        return view('accounts.countries.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pkCountriesID' => 'required|unique:Countries',
            'countriesNameEN' => 'required|unique:Countries',
            'countriesStatus' => 'required'
        ]);

        $input = $request->all();
        Country::create($input);

        Flash::message( 'Add successful' );
        return redirect('/account/country');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $countries = Country::findOrFail($id);
        return view('accounts.countries.edit', ['countries' => $countries]);
    }

    public function update( Request $request, $id)
    {
        $countries = Country::findOrFail($id);

        $this->validate($request, [
            'pkCountriesID' => 'required|unique:Countries,pkCountriesID,'.$id.',pkCountriesID',
            'countriesNameEN' => 'required',
            'countriesStatus' => 'required'
        ]);
        $input = $request->all();

        $countries->fill($input)->save();
        Flash::message( trans('text_lang.updateSuccessful') );
        return redirect('/account/country');
    }

    public function destroy($id)
    {
        Country::findOrFail($id)->delete();

        Flash::message( trans('text_lang.deleteSuccessful') );
        return redirect('/account/country');
    }
}
