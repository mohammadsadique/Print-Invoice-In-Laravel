<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

use App\Models\Group;
use App\Models\Patient;
use App\Models\GroupTest;
use App\Models\Test;
use App\Models\Doctor;



class Controller extends Controller
{        
    public function invoicePDF($groupId)
    {
        $group = Group::where('id',$groupId)->first();
        if(!empty($group->patient_id)){
            $patient = patient::where('id',$group->patient_id)->first();
        } else {
            $patient = '';
        }
        
        $tbl = '';
        if(!empty($group->id)){
            $gt = GroupTest::where('group_id',$group->id)->get();  
            $i = 1;
            foreach($gt as $rr){
                if(!empty($rr->test_id)){
                    $t = Test::where('id',$rr->test_id)->first(); 
                    $name = '';
                    if(!empty($t->name)){
                        $name = $t->name;
                    }
                    $price = '';
                    if(!empty($t->price)){
                        $price = $t->price;
                    }
                    $tbl .= '
                        <tr>
                          <th class="tblText">'.$i.'</th>
                          <th class="tblText tblAlign3">'.$name.'</th>
                          <th class="tblText tblAlign2"><p>'.$price.'</p></th>
                        </tr>
                    ';
                }
                $i++;
            }
        }
        
        if(!empty($group->doctor_id)){
            $doctor = Doctor::where('id',$group->doctor_id)->first();    
        } else {
            $doctor = '';
        }
        
        
        
        $pdf = PDF::loadView('admin.groups.invoicePDF',compact('group','patient','tbl','doctor'));
        // return $pdf->stream($patient->name.'.pdf');
        return $pdf->download($patient->name.'.pdf');
        
        // $pdf->save('uploads/pdf/'.$pdf_name);
    }



}
