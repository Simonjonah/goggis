@include('dashboard.header')
@include('dashboard.sidebar')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Result</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

@php
  
$totalresultforavsonliteracy = 0;
  $totalclassavgscorefornumercy = 0;
  $total_classaveragefornone = 0;
  $total_classaverageforcca = 0;
  $total_score1 = 0;
  $total_score2 = 0;
  
@endphp

@foreach ($getyour_results as $getyour_result)
@if ($getyour_result->status == null || $getyour_result->status == 'approved')
  
   
    @else
   
    @endif
@endforeach






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
          <img style="width: 100px; height: 100%;" src="{{ asset('front/images/logo.jpg') }}">
      </th>

      <th style="text-align: center; width: 5000px;"><h2>GRACE OF GOD INTERNATIONAL SCHOOL (GOGIS)</h2>
          <p style="font-weight: normal; margin-bottom: -8px;">
              61 Ntiedo Udosen street, P.O. Box 2666 Uyo 
              Akwa Ibom State, Nigeria <br>
              Website: gogischools.org
            
              </p>
          {{-- <p  style="font-weight: normal; font-style:italic">Motor: Fostering Creativity and Development</p>  --}}
      </th>
          
      <th style="text-align: center">
          <img style="width: 100px; height: 100%;"  src="{{ asset('public/../'.$getyour_result->images) }}">
      </th>
  </tr>
 

      <tr>
          <th colspan="2" style="text-align: center; text-transform: uppercase;">{{ $getyour_result->term }} REPORT FOR {{ $getyour_result->academic_session }} <br>
              {{ $getyour_result->surname }}, {{ $getyour_result->fname }} {{ $getyour_result->middlename }}
          </th>
          <th>-</th>
      </tr>
</table>

    
    <?php 
    $total_score = 0;

    ?>
    

      
      

      <style>
        
        .container .row .col .psy{
            width: 300px;
            display: inline-block;
        }

        .topto{
          position: relative;
          top: -120px;
        }

        .top2{
          position: relative;
          top: -10px;
        }
      </style>
      
      <div class="container">
        <div class="row">
            <div class="col">
                <div class="psy">
                    <table class="topto table">
                        <tr>
                            <th>SUBJECTS</th>
                            <th colspan="5">GRADE SYSTEM</th>
                        </tr>
                         
                       
                         
                        @foreach ($getyour_results as $getyour_result)
                        @if ($getyour_result->status == null || $getyour_result->status == 'approved')
                        <tr>
                          <td style="width: 80px;">{{ $getyour_result->subjectname }}</td>
                          <td style="width: 80px;">{{ $getyour_result->comment }}</td>
                        </tr>
                        @else
                      
                        @endif
                    @endforeach
                       
                      </table>
                </div>

                <div class="psy">
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
                            <td>Mental Alertness</td>
                                @if ($view_results->mentalalert1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->mentalalert2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->mentalalert3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->mentalalert4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                                @if ($view_results->mentalalert5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                                
                          </tr>
        
                          <td>Punctuality</td>
                                @if ($view_results->punt1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->punt2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->punt3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->punt4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->punt5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
                          <tr>
                              <td>Respect</td>
                              @if ($view_results->respect1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->respect2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->respect3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->respect4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->respect5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                              <td>Neatness</td>
                              @if ($view_results->neat1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->neat2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->neat3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->neat4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->neat5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
              
                          </tr>
                              <td>Politeness</td>
                              @if ($view_results->polite1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->polite2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->polite3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->polite4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->polite5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
              
                            
                          </tr>
              
                          <tr>
                              <td>Honesty</td>
                              @if ($view_results->honesty1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->honesty2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->honesty3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->honesty4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->honesty5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
                          <tr>
                              <td>Relationship with Peers</td>
                              @if ($view_results->relationship1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->relationship2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->relationship3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->relationship4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->relationship5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                              <td>Williness</td>
                              @if ($view_results->williness1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->williness2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->williness3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->williness4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->williness5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                              <td>Team Spirit</td>
                              @if ($view_results->teamspirit1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->teamspirit2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->teamspirit3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->teamspirit4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->teamspirit5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          <tr>
                            <td>Verbal Skill</td>
                                @if ($view_results->verbal1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->verbal2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->verbal3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->verbal4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->verbal5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
        
                          <td>Games & Sports</td>
                                @if ($view_results->sports1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sports2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sports3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->sports4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->sports5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                               
                          </tr>
                          <tr>
                              <td>Arts & Craft</td>
                              @if ($view_results->arts1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->arts2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->arts3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->arts4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                 @if ($view_results->arts5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
              
                              
                          </tr>
                        <tr>
                          {{-- <td>Creativity</td>
                                @if ($view_results->creativity1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->creativity2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->creativity3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->creativity4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td> </td>

                                @endif
                                @if ($view_results->creativity5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td> </td>

                                @endif
                          </tr>
                              
                          <tr>
                              <td>Musical Skills</td>
                              @if ($view_results->music1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->music2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->music3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->music4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->music5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
              
                          


                          

                          <tr>
                              <td>Dance Skills</td>
                              @if ($view_results->paint1 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->paint2 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->paint3 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
        
                                @if ($view_results->paint4 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif

                                @if ($view_results->paint5 == 'Yes')
                                <td><i class="fas fa-check"></i> </td>
                                @else
                                <td></td>
                                @endif
                          </tr>
               --}}
                          
                       
                      </table>
                </div>


                <div class="psy">
                    <table class="table" style="margin-left: 11px">
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
                            <td> Poor</td>
                            <td> V.Poor</td>
                            <td> Fair</td>
                            <td> Good</td>
                            <td> Exellence</td>
                            
                            
                        </tr>
                       
                      </table>
                </div>
            </div>
        </div>
      </div>
      

      </table>

     

    


      <table>
        <tr>
            <td>REG CODE:</td>
            <td>{{ $getyour_result->regnumber }}</td>
            <td>SEX:</td>
            <td>{{ $getyour_result->user['gender'] }}</td>
            {{-- <td>TOTAL SCORE OBTAINABLE:</td> --}}
            {{-- <td>{{ $total_subject * 100 }}</td> --}}
            {{-- <td>NO. OF DISTINGTIONS (A-B):</td>
            <td>7A's, 3B's</td> --}}
        </tr>

        <tr>
            <td>CLASS:</td>
            <td>{{ $getyour_result->classname }}</td>
            <td>TERM:</td>
            <td>{{ $getyour_result->term }} </td>
             
            <td>NEXT TERM BEGIN:</td>
            <td>{{ $view_results->nextterm }}</td>
        </tr>
        <tr>
            <td>AGE:</td>
            <td>{{ $getyour_result->user['dob'] }}</td>
          
            <td>PUPIL'S GRADE IN CLASS:</td>
            <td>{{ $totalstudentInClass }}</td>
        </tr>
        
    

     </table>

      
     <span style="color: red"> Times School Opened: {{ $view_results->schoolopen }}</span> <br>
     <span style="color: red">Times School Present:{{ $view_results->timespresent }}</span> <br>
     <span style="color: red">Times School Absent: {{ $view_results->timeabsent }}</span> <br>
    {{-- <table class="dayopen" style="margin-top: 10px; " >
        <tr>
            <td class="von">Days School Opens:</td>
            <td class="von">{{ $getyour_result->dayschopen }}</td>
            <td class="von">No of Days Present:</td>
            <td class="von">{{ $getyour_result->dayspresent }}</td>
            <td class="von">Next Term Begins:</td>
            <td class="von">{{ $getyour_result->next_term }}</td>
        </tr>

       
        </table> --}}

        <table style="margin-top: 2px;">
            <tr>
                <td>Teacher's Comment</td>
                <td>{{ $view_results->headteacher_comment}}								
                </td>
            <td>
                <img style="width: 50px; height: 50px;" src="{{ asset('assets/dist/img/signature.png')}}">
            </td>
            </tr>
            <tr>
                <td>Head Teacher Comment</td>
                <td>{{ $getyour_result->headteacher_comment }}	</td>							
                
            <td>@if (Auth::guard('web')->user()->promotion == null)
                {{-- <span>teacher</span> --}}
            @else
            <a class="btn btn-primary" href="{{ url('web/addcomment/'.$getyour_result->id) }}">Add Comment</a>
            @endif</td>
            </tr>
        </table> 


   @include('dashboard.footer')

