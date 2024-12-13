<!DOCTYPE html>
<html>
    <head>
        <title>Grace of God Terminal Result</title>
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    </head>

@php
  
$totalresultforavsonliteracy = 0;
  $totalclassavgscorefornumercy = 0;
  $total_classaveragefornone = 0;
  $total_classaverageforcca = 0;
  $total_scoremaths = 0;
@endphp

@foreach ($getyour_results as $getyour_result)
    @if ($getyour_result->status == null || $getyour_result->status == 'approved')
       
   
    @else
   
    @endif
@endforeach




@foreach ($getyour_results as $getyour_result)
    @if ($getyour_result->status == null  && $getyour_result->category == 'MATHEMATICAL SKILL')
       
    @else
    @endif
@endforeach


@foreach ($results_totalforliteracyonavgs as $results_totalforliteracyonavg)
    @if ($results_totalforliteracyonavg->status == 'approved' || $results_totalforliteracyonavg->status == null && $results_totalforliteracyonavg->category == 'MATHEMATICAL SKILL')
       
    @else
    @endif
@endforeach



@foreach ($results_fornums as $results_fornum)
    @if ($results_fornum->status == 'approved' || $results_fornum->status == null && $results_fornum->status == 'LANGUAGE SKILL')
       
    @else
    @endif
@endforeach


{{-- @foreach ($totalclassavgfornumercys as $totalclassavgfornumercy)
    @if ($totalclassavgfornumercy->status == 'approved' || $totalclassavgfornumercy->status == null && $totalclassavgfornumercy->category == 'LANGUAGE SKILL')
       
    @else
    @endif
@endforeach --}}




@foreach ($results_fornones as $results_fornone)
    @if ($results_fornone->status == 'approved' || $results_fornone->status == null && $results_fornone->category == 'NURSERY RHYMES')
      
    @else
    @endif
@endforeach

{{-- @foreach ($totalresults_noneonavges as $totalresults_noneonavge)
    @if ($totalresults_noneonavge->status == 'approved' || $totalresults_noneonavge->status == null && $totalresults_noneonavge->status == 'None')

    @else
    @endif
@endforeach--}}


@foreach ($results_forccas as $results_forcca)
    @if ($results_forcca->status == 'approved' || $results_forcca->status == null && $results_forcca->category == 'FRENCH')
       
    @else
    @endif
@endforeach


{{--@foreach ($results_classaverageforccas as $results_classaverageforcca)
    @if ($results_classaverageforcca->status == 'approved' || $results_classaverageforcca->status == null && $results_classaverageforcca->status == 'CCA')
       
    @else
    @endif
@endforeach --}}







<style>

.result .colsfor{
  display: inline-block;

}
    /* table{
    width:200px;
    height:auto;
    table-layout:fixed;
} */
td {
  height: 3px; /* Adjust the height as per your requirements */
}
tr {
  height: 3px; /* Adjust the height as per your requirements */
}

td {
    margin: 0px;
  padding-top: 0px;
  padding-bottom: 0px;
}
table, th {
    border: 1px solid black;
  border-collapse: collapse;
}
table, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-size: 12px;
  text-align: center;
  /* height:10px;
  padding: 0px;
  margin: 0px; */
}
table .b{
    border-style: none;
}
/* .dayopen, .von{
    font-size: 15px;
} */
table, tr, td{
    margin: 0;
    padding: 0;
}

</style>
<body>

   
        

        
             
   @php
   $total_score = 0;
   $total_scoreforliteracy = 0;
   $total_scorefornumeracy = 0;
   $total_fornone = 0;
   $total_forcca = 0;




  
   
@endphp
    
   



<table class="table">

    <tr>
        <th style="text-align: center; width: 120px; height: 100px; padding: 0px">
            <img style="width: 100px; height: 100px;" src="{{ asset('front/images/logo.jpg')}}">
        </th>

        <th style="text-align: center; width: 450px;"><h1>GRACE OF GOD INTERNATIONAL SCHOOL - GOGIS</h1>
            <p style="font-weight: normal; margin-bottom: 11px;">
              61 Ntiendo Udosen Street, P.O.Box 2666 Uyo 
              Akwa Ibom State, Nigeria <br>
              Website: gogischools.org
                
                </p>
            {{-- <p  style="font-weight: normal; font-style:italic">Motor: Fostering Creativity and Development</p>  --}}
        </th>
            
        <th style="text-align: center">
            <img style="width: 100px; height: 100px;" src="{{ asset('public/../'.$getyour_result->images) }}">
        </th>
    </tr>
   

        <tr>
            <th colspan="2" style="text-align: center; text-transform: uppercase;">{{ $getyour_result->entrylevel }} REPORT FOR {{ $getyour_result->academic_session }} <br>
                {{ $getyour_result->surname }}, {{ $getyour_result->fname }} {{ $getyour_result->middlename }}
            </th>
            <th>-</th>
        </tr>
</table>



<style>

.container .row .col .psy{
   width: 330px;
   display: inline-block;
}

.topto{
 position: relative;
 top: 0px;
}

.top2{
 position: relative;
 top: 1px;
}
</style>

<div class="container">
<div class="row">
   <div class="col">
       <div class="psy">
         <table id="myTable">
           <tr>
             <th>SUBJECTS </th>
             <th>TEST 30%</th>
             <th>EXAM 70%</th>
             <th>TOTAL</th>
             <th>-</th>
             <th>REMARKS</th>
           </tr>
         
          
           @foreach ($getyour_results as $getyour_result)
               @if ($getyour_result->status == null || $getyour_result->status == 'approved')
                   @php
                   $total_scoremaths +=$getyour_result->test_1 + $getyour_result->test_2 + $getyour_result->exams;
                   
                   @endphp
           
             <tr>
                 <td style="text-align: left; width: 145px; font-size: 16px;">{{ $getyour_result->subjectname }}</td>
                 <td style="width: 45px; font-size: 16px;">{{ $getyour_result->test_1  }}</td>
                 <td style="width: 45px; font-size: 16px;">{{ $getyour_result->exams }}</td>

                 <td style="width: 45px; font-size: 16px;">{{ $getyour_result->test_1 + $getyour_result->exams }}</td>

                 <td style="width: 45px; font-size: 16px;">
                   @if ($getyour_result->test_1 + $getyour_result->exams > 69)
                   <td style="width: 80px; font-size: 16px;">Excellent</td>
                   @elseif ($getyour_result->test_1 + $getyour_result->exams > 59)
                   <td style="width: 80px; font-size: 16px;">Good</td>
                 
                   @elseif ($getyour_result->test_1 + $getyour_result->exams > 49)
                   <td style="width: 80px; font-size: 16px;">Fair</td>
                   @elseif ($getyour_result->test_1 + $getyour_result->exams > 44)
                   <td style="width: 80px; font-size: 16px;">Poor</td>
                   @elseif ($getyour_result->test_1 + $getyour_result->exams > 39)
                   <td style="width: 80px; font-size: 16px;">V.Poor </td>
                 
                   @else
                   <td style="width: 80px; font-size: 16px;">V.Poor</td>
                 @endif</td>
               
               </tr>
             
             
       @endif
       
       @endforeach
     
      
 <td><b>TOTAL</b></td>
 <td>-</td>
 <td>-</td>
 <td><b>{{ $total_scoremaths }}</b></td>
 <td>-</td>
 <td>-</td>
 </table>

   
     

       </div>

       <div class="psy">


        <table class="top2 table">
          <tr>
            <th colspan="3">SOCIAL BEHAVIOUR AND MANIPULATING SKILLS (SBMS)</th>
            <th colspan="2">KEY:</th>
          </tr>
          <tr>

            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>

          </tr> 

          <tr>
              <td style="font-size: 16px;"> Poor</td>
              <td style="font-size: 16px;"> V.Poor</td>
              <td style="font-size: 16px;"> Fair</td>
              <td style="font-size: 16px;"> Good</td>
              <td style="font-size: 16px;"> Exellence</td>
              
              
          </tr>
         
        </table>


           <table class="top2 table">
               <tr>
                   <th>-</th>
                   <th colspan="5">KEY TO RATING</th>
                 </tr>
                
                 <tr>
                   <td><b>BEHAVIOUR/SKILLS</b>
                   </td>
                   <td>1</td>
                   <td>2</td>
                   <td>3</td>
                   <td>4</td>
                   <td>5</td>
                 </tr>
                 <tr>
                   <td style="font-size: 16px;">Mental Alertness</td>
                       @if ($view_results->mentalalert1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->mentalalert2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->mentalalert3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->mentalalert4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
                       @if ($view_results->mentalalert5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
                       
                 </tr>

                 <td style="font-size: 16px;">Punctuality</td>
                       @if ($view_results->punt1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->punt2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->punt3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->punt4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->punt5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
                 </tr>
                 <tr>
                     <td style="font-size: 16px;">Respect</td>
                     @if ($view_results->respect1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->respect2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->respect3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->respect4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->respect5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
                 </tr>
     
                 <tr>
                     <td style="font-size: 16px;">Neatness</td>
                     @if ($view_results->neat1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->neat2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->neat3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->neat4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->neat5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
     
                 </tr>
                     <td style="font-size: 16px;">Politeness</td>
                     @if ($view_results->polite1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->polite2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->polite3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->polite4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->polite5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
     
                   
                 </tr>
     
                 <tr>
                     <td style="font-size: 16px;">Honesty</td>
                     @if ($view_results->honesty1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->honesty2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->honesty3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->honesty4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->honesty5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
                 </tr>
                 <tr>
                     <td style="font-size: 16px;">Relationship with Peers</td>
                     @if ($view_results->relationship1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->relationship2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->relationship3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->relationship4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->relationship5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
                 </tr>
     
                 <tr>
                     <td style="font-size: 16px;">Williness</td>
                     @if ($view_results->williness1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->williness2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->williness3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->williness4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->williness5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
                 </tr>
     
                 <tr>
                     <td style="font-size: 16px;">Team Spirit</td>
                     @if ($view_results->teamspirit1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->teamspirit2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->teamspirit3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->teamspirit4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->teamspirit5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
                 </tr>
     
                 <tr>
                   <td style="font-size: 16px;">Verbal Skill</td>
                       @if ($view_results->verbal1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->verbal2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->verbal3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->verbal4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->verbal5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
                 </tr>

                 <td style="font-size: 16px;">Games & Sports</td>
                       @if ($view_results->sports1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->sports2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->sports3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->sports4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->sports5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
                      
                 </tr>
                 <tr>
                     <td style="font-size: 16px;">Arts & Craft</td>
                     @if ($view_results->arts1 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->arts2 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->arts3 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                       @if ($view_results->arts4 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif

                        @if ($view_results->arts5 == 'Yes')
                       <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                       @else
                       <td style="font-size: 16px;"></td>
                       @endif
     
                     
                 </tr>
               <tr>
                
             </table>
       </div>


      </div>
</div>
</div>


</table>

<span style="color: red"> Times School Opened: {{ $view_results->schoolopen }}</span> <br>
<span style="color: red">Times School Present:{{ $view_results->timespresent }}</span> <br>
<span style="color: red">Times School Absent: {{ $view_results->timeabsent }}</span> <br>


    


      <table>
        <tr>
            <td style="font-size: 16px;">REG CODE:</td>
            <td style="font-size: 16px;">{{ $getyour_result->regnumber }}</td>
            <td style="font-size: 16px;">SEX:</td>
            <td style="font-size: 16px;">{{ $getyour_result->user['gender'] }}</td>
            <td style="font-size: 16px">Position: </td>
            <td style="font-size: 16px;">{{ $rankedStudents->rank }} </td>
        </tr>

        <tr>
            <td style="font-size: 16px;">CLASS:</td>
            <td style="font-size: 16px;">{{ $getyour_result->classname }}</td>
            <td style="font-size: 16px;">TERM:</td>
            <td style="font-size: 16px;">{{ $getyour_result->term }} </td>
             <td style="font-size: 16px;">SCORE OBTAINED:</td>
            <td style="font-size: 16px;">{{ $total_scoremaths + $total_scorefornumeracy + $total_fornone + $total_forcca }}</td>

            <td style="font-size: 16px;">NEXT TERM BEGIN:</td>
            <td style="font-size: 16px;">{{ $view_results->nextterm }}</td>

            
        </tr>
        <tr>
            <td style="font-size: 16px;">AGE:</td>
            <td style="font-size: 16px;">{{ $getyour_result->user['dob'] }}</td>
            
            <td style="font-size: 16px;">AVERAGE:</td> 
            <td style="font-size: 16px;">{{ $total_scoremaths + $total_scorefornumeracy + $total_fornone + $total_forcca / $totalstudentInClass}}</td>
            <td style="font-size: 16px;"> NO. OF PUPILS IN CLASS:</td>
            <td style="font-size: 16px;">{{ $totalstudentInClass }} </td> 

        </tr>
        
    

     </table>

      
      
    {{-- <table class="dayopen" style="margin-top: 10px; " >
        <tr>
            <td style="font-size: 16px;" class="von">Days School Opens:</td>
            <td style="font-size: 16px;" class="von">{{ $getyour_result->dayschopen }}</td>
            <td style="font-size: 16px;" class="von">No of Days Present:</td>
            <td style="font-size: 16px;" class="von">{{ $getyour_result->dayspresent }}</td>
            <td style="font-size: 16px;" class="von">Next Term Begins:</td>
            <td style="font-size: 16px;" class="von">{{ $getyour_result->next_term }}</td>
        </tr>

       
        </table> --}}

        <table style="margin-top: 2px;">
          

            <tr>
                <td style="font-size: 16px;"> Teacher's Comment</td>
                <td style="font-size: 16px;">{{ $view_results->headteacher_comment}}								
                </td>

            </tr>
            <tr>
            <td style="font-size: 16px;">Head Teacher's Comment</td>
                <td style="font-size: 16px;">{{ $getyour_result->headteacher_comment}}								
                </td>
                <img style="width: 50px; height: 50px;" src="{{ asset('assets/dist/img/signature.png')}}">
            </td>
            </tr>
    
    
        </table> 

{{-- 
        @else

        @endif
    @endforeach
   --}}

         
   <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- bs-custom-file-input -->
   <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
   <script type="text/javascript">
   $(document).ready(function () {
     bsCustomFileInput.init();
   });
   </script>
   
   <script type="text/javascript"> 
       window.addEventListener("load", window.print());
     </script>
     
   </body>
   </html>