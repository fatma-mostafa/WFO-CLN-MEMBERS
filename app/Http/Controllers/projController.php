<?php
use App\Country;
use App\Agent;
use App\Category;
use App\Membership;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class projController extends Controller
{
    public function Home(){
        $flag = false;
        $ALLCountries = DB::table('country')->distinct()->get()->toArray();
        $Count = count($ALLCountries);
        //$ALLCountries->dump();

        return view('proj\HomePage',compact('ALLCountries','Count'));
        /* if($ALLCountries->isNotEmpty())
            dump('Not Empty');
        else
            dump('Actually Empty'); */
        //dd($ALLCountries);
        
    }
    
    public function specific_Country(Request $request){
        $Org = [];
        $Net = [];
        $Category = [];
        $cName = $request->Country;
        $Agents = DB::table('agents')->where('Country_Name','=',$cName)->orderBy('companyName', 'ASC')->get()->toArray();
        $Count = count($Agents);
        for($i = 0 ;$i < $Count ; $i++){
            $Category[$i] = DB::table('category')->where('ID','=',$Agents[$i]->Category_ID)->get()->first();
        }
        //dd($Category);
        $WFO = DB::table('membership')->where('Organizations_ID','=', 1)->get()->toArray();//To get ALL Agents in WFO Organization
        $CLN = DB::table('membership')->where('Organizations_ID','=', 2)->get()->toArray();
        
         for($i = 0 ;$i < $Count ; $i++){
            $flag = false;
            for($j=0 ;$j<count($WFO);$j++){
                if($Agents[$i]->ID == $WFO[$j]->Agents_ID){
                    $Org[$i] = True;
                    $flag = true; 
                }
            }
            if(!$flag){
                $Org[$i]  = false;
            }
            
        } 
        for($i = 0 ;$i < $Count ; $i++){
            $flag = false;
            for($j=0 ;$j<count($CLN);$j++){
                if($Agents[$i]->ID == $CLN[$j]->Agents_ID){
                    $Net[$i] = True;
                    $flag = true; 
                }
            }
            if(!$flag){
                $Net[$i]  = false;
            }
            
        } 
        
        //dd($Org);
       
        return view('proj\Agents',compact('cName','Agents','Count','Org','Net','Category'));
    }


   public function EditCategory($a){
        $Agent = DB::table('agents')->where('ID','=',$a)->get()->first();
        /* dd($Agent->ID); */
        $Categories =  DB::table('category')->get()->toArray();
        $Count = count($Categories);
        return view('proj\EditCategory',compact('Categories','Count','Agent','a'));
   }

    public function Confirm(Request $request,$a){
        $categoryID = $request->Category;
       /*  $agent = DB::table('agents')->where('ID','=',$a)->get()->first();

        $agent->Category_ID = $categoryID;
        $agent->save(); */
        $affected = DB::table('agents')->where('ID', '=',$a)->update(['Category_ID' => $categoryID]);
        return redirect()->route('AgentsInSpec_Country');
   }
}
