<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SysParam;

class SysParamController extends Controller
{
	/**
	 * SalesController Constructor
	 *
	 * @param SysParam $sysparam
	 */
	public function __construct(SysParam $sysparam) 
	{
		$this->sysparam = $sysparam;
	}

    public function index()
    {
    	$settings = $this->sysparam->all();
    	return view('sys_param.index', compact('settings'));
    }

    public function update(Request $request)
    {
    	$params                 = $request->all();
        unset($params['_token']);
        foreach ($params as $key => $value) {
        	SysParam::where('name', $key)->update(['plain_value' => $value]);
        }
        return back()->withSuccess('Update Successful!');
    }
}
