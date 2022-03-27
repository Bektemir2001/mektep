<?php

namespace App\Http\Controllers\Date;
use App\Http\Controllers\Date\BaseController;
use App\Http\Requests\Date\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        $date = $request->validated();

        $this->service->store($date);

        return redirect()->route('dates');
    }
}
