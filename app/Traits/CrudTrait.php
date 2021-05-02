<?php
namespace App\Traits;
use Illuminate\Http\Request;

trait CrudTrait {
	public function store(Request $request)
    {
        $this->table->create($request->all());
        return redirect(route($this->uri.'.index'))->with('success',trans('message.create'));
    }

    public function update(Request $request, $id)
    {
        $this->table->findOrFail($id)->update($request->all());
        return redirect(route($this->uri.'.index'))->with('success', trans('message.update'));
    }
    
    public function destroy($id)
    {
        $tb = $this->table->findOrFail($id);
        $tb->delete();
        return response()->json(['msg' => true,'success' => trans('message.delete')]);
    }
    
    // public function destroy($id)
    // {
    //     $this->table->findOrFail($id)->delete();
    //     return redirect(route($this->uri.'.index'))->with('success',trans('message.delete'));
    // }

    // public function postDeleteAll(Request $request)
    // {
    //     $ID = $request->id;
    //     if(count($ID) > 0){
    //         foreach ($ID as $key => $value) {
    //             $type = $this->table->findOrFail($value);
    //             $type->delete();
    //         }
    //         return redirect(route($this->uri.'.index'))->with('success',trans('message.delete.all'));
    //     }
    // }
}