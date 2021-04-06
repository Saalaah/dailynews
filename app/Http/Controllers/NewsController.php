<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    
   
    
    public function sorting($sortby=null,$order=null){

        $allNews=$this->getnews()->sortBy($sortby,1,filter_var($order, FILTER_VALIDATE_BOOLEAN));

        return view('index',compact('allNews','sortby','order'));

    }
    
    public function getnews(){
           
            $agenciesNews=new News;
            $agenciesNews=$agenciesNews->newsdata();
            $allNews=array();

            $i=0;

foreach($agenciesNews as $agencyName=>$latestnews){
  
    foreach($latestnews['latestnews'] as $news){
  
            $allNews[$i]=array(
            'title'=>$news['title'],
            'content'=>$news['content'],
            'rating'=>$news['rating'],
            'datetime'=>strtotime($news['datetime']),
            'source'=>$agencyName
            );

            $i++;

}
}
    $allNews=collect($allNews);
    // ->sortBy('datetime',1,false);

return $allNews;
}







}
