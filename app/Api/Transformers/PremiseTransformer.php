<?php

namespace Api\Transformers;

use App\Premise;
use League\Fractal\TransformerAbstract;

class PremiseTransformer extends TransformerAbstract
{
	public function transform(Premise $premise)
	{
		return [
			'id' 	=> (int) $premise->id,
			'regno'  => $premise->regno,
			'company_name'  => $premise->company_name,
			'state_name'  => $premise->state_name,
			'district_name'  => $premise->district_name
		];
	}
}