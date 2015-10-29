<?php

namespace Api\Requests;

use App\Http\Requests\Request;

class PremiseRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'regno' => 'required|max:20',
	    	'company_name' => 'required|max:500',
	    	'state_name' => 'required|max:100',
	    	'district_name' => 'required|max:100',
    	];
	}
}