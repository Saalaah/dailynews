<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   public function newsdata(){ 
       
    $agenciesNews=[
        'Ag1'=>[
            'latestnews'=>[
                [
                    "title"=>"title 1 ",
                    "content"=>"content 1 " ,
                    "rating"=>"5/10" ,
                    "datetime"=>"Mon, 14 Dec 2020 2:01:59 +0000 " 
                ],
                [
                    "title"=>"title 2 ",
                    "content"=>"content 2 " ,
                    "rating"=>"9/10" ,
                    "datetime"=>"Mon, 14 Dec 2020 14:02:59 +0000 " 


                ],
                [
                    "title"=>"title 3 ",
                    "content"=>"content 3 " ,
                    "rating"=>"2/10" ,
                    "datetime"=>"Mon, 14 Dec 2020 6:04:59 +0000 " 

                ]


                ]

                ],


    'Ag2'=>[
        'latestnews'=>[
             [
                "title"=>"title 4 ",
                "content"=>"content 4 " ,
                "rating"=>"3/10" ,
                "datetime"=>"Mon, 14 Dec 2020 13:01:59 +0000 " 
              ],
                [  
                 "title"=>"title 5 ",
                "content"=>"content 5 " ,
                "rating"=>"9/10" ,
                "datetime"=>"Mon, 14 Dec 2020 00:02:59 +0000 "
                 ],
            [
                "title"=>"title 6 ",
                "content"=>"content 6 " ,
                "rating"=>"6/10" ,
                "datetime"=>"Mon, 14 Dec 2020 0:00:00 +0000 " 
            ]



        ]


        ],
            
'Ag3'=>[
            'latestnews'=>[
              [
                "title"=>"title 7 ",
                "content"=>"content 7 " ,
                "rating"=>"6/10" ,
                "datetime"=>"Mon, 14 Dec 2020 08:01:59 +0000 " 
              ],
             [
                "title"=>"title 8 ",
                "content"=>"content 8 " ,
                "rating"=>"8/10" ,
                "datetime"=>"Mon, 14 Dec 2020 03:02:59 +0000 "
            ],
            [
                "title"=>"title 9 ",
                "content"=>"content 9 " ,
                "rating"=>"1/10" ,
                "datetime"=>"Mon, 14 Dec 2020 12:00:00 +0000 " 
            ]
    
    
            ]  
    




    ]];
            
return $agenciesNews;
}
}
