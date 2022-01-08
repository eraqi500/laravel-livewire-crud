<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Register;
use Livewire\WithPagination;


class Forms extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $hiddenId;
//    public $allData;

    protected $rules = [
      'name' => 'required|min:3|max:20',
      'email' => 'required|email'
    ];

    public function submit(){
        $validateData = $this->validate();
        $updatedId = $this->hiddenId;
        if($updatedId >0){
            // updated
            $updatedArray = array(
                'name' => $validateData['name'],
                'email' => $validateData['email']
            );
            DB::table('registers')
                ->where('id', $updatedId)
                ->update($updatedArray);
        }else {
            Register::create($validateData);
            session()->flash('success', 'Form is Submitted');
        }

    }

    public function editForm($id){
        $singleData = Register::find($id);
        $this->name = $singleData-> name;
        $this->email =$singleData->email;
        $this->hiddenId = $singleData->id;
    }

    public function deleteForm($id){
        DB::table('registers')->where('id', $id)->delete();
        session()->flash('message','the user has been deleted successfully');
    }

    public function addForm(){
        $singleData = '';
        $this->name = '';
        $this->email ='';
        $this->hiddenId = '';
    }

    public function render()
    {
        $allData = Register::paginate(2);
        return view('livewire.forms',['allData'=>$allData]);
    }
}
