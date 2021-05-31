<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Science Land Academy</title>

    <style>:root {
        --input-padding-x: 1.5rem;
        --input-padding-y: .75rem;
      }
      
      body {
        background:url(https://images.pexels.com/photos/3740217/pexels-photo-3740217.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) ;background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
       
        font-family: 'Changa', sans-serif;

      }
      select { text-align-last: right; }
     </style>
     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@700&display=swap" rel="stylesheet">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body >
    
  
<div class="container">
    <div class="row">

        







        <div class="container">
      
            @if (\Session::has('success'))
                  <div class="alert  alert-success  text-right text-secondary  m-2 p-2">
                    
                      <div  style="width: 99%; height:100px" class="p-2 text-right"> {!! \Session::get('success') !!}</div>
                
              </div>
              @endif
                  <div class="row">
                    <div class=" mx-auto col col-12">
                      <div class="card card-signin my-5   " style="opacity: 0.8"  >
                        <div class="card-body  " >
                          <div class=" d-flex  justify-content-center align-content-center  p-2 text-right " style="opacity: 0.9 ;" >    
                   
                             <img src="{{asset('images/logo_full.png')}}" class="p-2 mt-2" width="300" height="120px" alt="">
          
                          </div>
          
                        <h5 class="card-title text-center  text-danger"> ADMIN   </h5>
                          <form class="form-signin" method="POST" action="/formations">
          @csrf
                              <div class="form-label-group p-2 m-2 text-right">
                                  <label for="inputNom" class=" text-secondary" >: إسم الدورة</label>
                                  <input type="text" id="inputNom" name="nom" class=" form-control form-control-lg bg-white" 
                                  required>
                                </div>
                               
                                
                        @php
                            $order=$formations->count()+1;
                        @endphp
                                <input type="text" id="order" name="order"  value="{{$order}}" class=" form-control form-control-lg bg-white" >
                                <input type="hidden" id="type" name="type" value="1" class=" form-control form-control-lg bg-white" >

          
                               
                        
              
                               
                          
          
          
                         
                            <div class=" mt-5 p-2">
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">
                                     أضف الدورة 
                                  </button>
                                  </div>
                          </form>
                        </div>
                      </div>
                    </div>
          
                
                  </div>
              </div>
          
              





        @foreach ( $formations as $formation)

        <table dir="rtl" style="opacity: 0.8" class="mt-5 m-2 table table-hover   shadow shadow-lg bg-dark  table-striped text-white text-right " style="opacity: 0.9">
           
            <tbody>

            
                      
              
            
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                إسم الدورة                                                 
                            </strong>
                        </td>
                        <td class="text-danger">
                            {{$formation->nom}}     
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
ترتيب الدورة                             </strong>
                        </td>
                        <td class="text-danger">
                            {{$formation->order}}     
                        </td>
                    </tr>
    
                   
    
    
                   
                   <tr>
                       <td>تفعيل / إلغاء</td>
                       <td>

                        <div class="checkbox">
                            <label>
                              <input type="checkbox" data-toggle="toggle">
                            </label>
                          </div>
                       </td>
                   </tr>
                                                    
                </tbody>
          </table>

          @endforeach

     
    </div>
</div>  



<div class="container">
    <div class="row">
        <table class="table table-user-information">
           
        </table>
    </div>
</div>



       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>
</html>




