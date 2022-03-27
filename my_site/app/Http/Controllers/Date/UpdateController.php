<?php

namespace App\Http\Controllers\Date;
use App\Http\Controllers\Date\BaseController;
use App\Http\Requests\Date\UpdateRequest;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $request){
        $new_date = $request->validated();
        $this->service->update($new_date, $id);
        return redirect()->route('dates');
    }
}
