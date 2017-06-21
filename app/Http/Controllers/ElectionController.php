<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Election;

class ElectionController extends Controller
{
    /**
	 * SalesController Constructor
	 *
	 * @param Election $election
	 */
	public function __construct(Election $election) 
	{
		$this->election = $election;
	}

    public function index()
    {
    	$elections = $this->election->all();
    	return view('election.index', compact('elections'));
    }

    public function create() 
    {
    	return view('election.create');
    }
}
