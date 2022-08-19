<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Income Statement</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <!--header-->
    <main role="main">
    <div class="jumbotron">
        <div class="container" style="text-align:center; margin-bottom:-10px">
            <img src="logo.png" class="" alt="supermarket" style="width:150px; height:150px">
            <h1 class="display-3">Ravishka Mini Supermarket</h1>
        </div>  
    </div>
    <br><br>
      <div class="title">
          <h2><center>Income Statement</center></h2>
          <br><br>

        <!--validation part-->
        @if ($errors->any())
                     
        @endif

        <!--generate successfull message-->
        @if(session('message'))
            <center><h5>{{ session('message') }}</h5></center>
        @endif    

        <br><br>

      </div> 

      <?php 
         $CustomerIncome = '' ;
         $SalesIncome = '' ;
         $InterestIncome = '' ;
         $type_of_income = array("","",);

         foreach ($incomes as $income){
            switch ($income['type_of_income']) {
                case 'Customer Income':
                    $CustomerIncome = 'disabled';
                  break;
                case 'Sales Income':
                    $SalesIncome = 'disabled';
                  break;
                case 'Interest Income':
                    $InterestIncome = 'disabled';
                  break;
            }
        }
         ?>

           <!--craete income information form-->
          <form method="post" action="{{ route('saveTask.store') }}">
           {{csrf_field()}}  

              <div class="row justify-content-around">
                <div class="col-md-5 mb-4">
                    <label for="typeofincome"><h5>Type of income</h5></label>
                        <select class="form-control form-control-lg" name="type_of_income">
                            <option value="">Select...</option>
                            <option {{ $CustomerIncome }}>Customer Income</option>
                            <option {{ $SalesIncome }}>Sales Income</option>
                            <option {{ $InterestIncome }}>Interest Income</option>
                    </select>
                    <br>
                    <!--generate validation message-->
                    <div class="alert-danger">{{$errors->first('type_of_income')}}</div>
              </div>
            </div> 

            <div class="row justify-content-around">
                <div class="col-md-5 mb-4">
                    <label for="incomeid"><h5>Income ID</h5></label>
                        <input class="form-control form-control-lg" type="text" class="form-control" name="income_id">
                        <br>
                        <!--generate validation message-->
                        <div class="alert-danger">{{$errors->first('income_id')}}</div>
              </div>
              
            </div> 

            <div class="row justify-content-around">
                <div class="col-md-5 mb-4">
                    <label for="Date"><h5>Income Date</h5></label>
                         <input type="text" class="form-control form-control-lg" name="i_date">
                         <br>
                         <!--generate validation message-->
                         <div class="alert-danger">{{$errors->first('i_date')}}</div>
                </div>
            </div>  

            <div class="row justify-content-around">
                <div class="col-md-5 mb-4">
                    <label for="monthlyincome"><h5>Monthly Income</h5></label>
                        <input type="text" class="form-control form-control-lg" name="month_income">
                        <br>
                        <!--generate validation message-->
                        <div class="alert-danger">{{$errors->first('month_income')}}</div>
                </div>
            </div> 

            <br>

            <div class="row justify-content-around">
                <div class="form-row">
                    <div class="col">
                        <!--create add button-->
                        <input type="submit" class="btn btn-success btn-lg" value="ADD">
                    </div> 
                    <div class="col-text-right">
                        <!--create view expense page button-->
                        <a class="btn btn-primary btn-lg btn-block" href="/viewincome" role="button"|>View Income Page</a>
                    </div> 
                </div>
            </div>
            </form> 
            <br>  
        <!--image-->    
        <div class="text-center">
            <svg class="rounded mx-auto d-block" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="600" height="500" viewBox="0 0 955.95262 639.22428" xmlns:xlink="http://www.w3.org/1999/xlink"><rect x="0.6744" y="0.39886" width="703.57562" height="450.60114" fill="#e6e6e6"/><rect x="20.419" y="56.91548" width="663.33851" height="171.77293" fill="#fff"/><rect x="185.4182" y="81.72713" width="140.28123" height="8.05267" fill="#e6e6e6"/><rect x="185.4182" y="111.10108" width="216.62477" height="8.05267" fill="#00b0ff"/><rect x="185.4182" y="138.7756" width="176.54439" height="8.05267" fill="#e6e6e6"/><rect x="185.4182" y="166.34557" width="103.06377" height="8.05267" fill="#e6e6e6"/><rect x="185.4182" y="193.9155" width="155.54994" height="8.05267" fill="#e6e6e6"/><rect x="121.4805" y="78.86424" width="17.17729" height="17.17729" fill="#e6e6e6"/><rect x="121.4805" y="106.53877" width="17.17729" height="17.17729" fill="#00b0ff"/><rect x="121.4805" y="134.2133" width="17.17729" height="17.17729" fill="#e6e6e6"/><rect x="121.4805" y="161.88783" width="17.17729" height="17.17729" fill="#e6e6e6"/><rect x="121.4805" y="189.56235" width="17.17729" height="17.17729" fill="#e6e6e6"/><rect x="533.73553" y="117.9903" width="57.25763" height="57.25764" fill="#e6e6e6"/><rect x="20.419" y="252.54576" width="663.33851" height="171.77293" fill="#fff"/><rect x="151.06361" y="267.81207" width="17.17729" height="17.17728" fill="#e6e6e6"/><rect x="121.4805" y="267.81207" width="17.17729" height="17.17728" fill="#00b0ff"/><path d="M534.74755,435.76326a65.04556,65.04556,0,0,0-105.003-9.69992l-4.18616-3.65793a70.59368,70.59368,0,0,1,113.973,10.52622Z" transform="translate(-122.02369 -130.38786)" fill="#e6e6e6"/><path d="M537.36724,508.18169l-4.6134-3.102a65.07765,65.07765,0,0,0,1.99371-69.31644l4.78387-2.83166a70.63742,70.63742,0,0,1-2.16418,75.25012Z" transform="translate(-122.02369 -130.38786)" fill="#00b0ff"/><path d="M426.13766,515.92644a70.58952,70.58952,0,0,1-.57926-93.52106l4.18616,3.65793a65.03087,65.03087,0,0,0,.53366,86.15415Z" transform="translate(-122.02369 -130.38786)" fill="#00b0ff"/><path d="M478.73772,539.44023a70.70869,70.70869,0,0,1-52.6-23.51382l4.14056-3.709a65.04339,65.04339,0,0,0,102.47562-7.13779l4.6134,3.102A70.55387,70.55387,0,0,1,478.73772,539.44023Z" transform="translate(-122.02369 -130.38786)" fill="#00b0ff"/><rect x="533.73553" y="305.03195" width="57.25763" height="57.25763" fill="#e6e6e6"/><rect x="119.09476" y="342.24939" width="57.25764" height="57.25763" fill="#e6e6e6"/><rect width="703.57562" height="29.89047" fill="#00b0ff"/><circle cx="22.21219" cy="15.28159" r="5.53997" fill="#fff"/><circle cx="43.24053" cy="15.28159" r="5.53997" fill="#fff"/><circle cx="64.26886" cy="15.28159" r="5.53997" fill="#fff"/><polygon points="817.168 623.704 831.411 623.704 838.188 568.764 817.165 568.765 817.168 623.704" fill="#ffb8b8"/><path d="M935.5583,749.44184l28.05079-.00113h.00113a17.87713,17.87713,0,0,1,17.87616,17.87587v.5809l-45.92723.00171Z" transform="translate(-122.02369 -130.38786)" fill="#2f2e41"/><polygon points="781.694 569.766 792.205 579.379 834.284 543.411 818.771 529.224 781.694 569.766" fill="#ffb8b8"/><path d="M904.17525,694.2705,924.875,713.201l.00084.00077a17.87711,17.87711,0,0,1,1.12667,25.25538l-.392.42866L891.71907,707.891Z" transform="translate(-122.02369 -130.38786)" fill="#2f2e41"/><polygon points="839.555 430.772 835.518 511.511 845.611 599.316 815.333 603.353 796.158 492.336 790.102 416.642 839.555 430.772" fill="#2f2e41"/><path d="M1009.01348,531.89159s12.111,79.73029-13.12018,105.97064-59.54541,72.66559-59.54541,72.66559L912.126,680.25048l61.5639-65.60089-12.111-44.40668-49.453-23.21265,8.074-55.50842,72.66559-1.00925Z" transform="translate(-122.02369 -130.38786)" fill="#2f2e41"/><circle cx="831.41549" cy="192.09457" r="24.71744" fill="#ffb8b8"/><polygon points="851.917 227.224 855.703 232.96 865.796 261.219 857.722 371.226 810.287 372.236 804.232 246.08 816.917 230.224 851.917 227.224" fill="#ccc"/><path d="M907.07976,379.49569l-8.074-1.00925s-2.01849,1.00925-3.02771,8.07394-13.12018,69.63785-13.12018,69.63785l16.14789,76.70258,18.16638-24.22187L906.07055,466.2907l11.10168-42.38828Z" transform="translate(-122.02369 -130.38786)" fill="#2f2e41"/><polygon points="887.999 248.099 894.054 248.099 909.193 329.847 895.064 393.43 880.934 370.217 884.971 344.986 882.953 322.783 875.888 309.662 887.999 248.099" fill="#2f2e41"/><path d="M968.045,322.48242l-4.49409-1.12353s-3.37053-19.09984-11.23522-16.8528-28.088,4.49409-28.088-4.49409,19.09985-16.8528,30.335-15.72928,25.58427,4.85076,29.21152,21.34686c5.81465,26.444-11.997,33.12341-11.997,33.12341l.29641-.96282a14.9957,14.9957,0,0,0-4.02865-15.30775Z" transform="translate(-122.02369 -130.38786)" fill="#2f2e41"/><path d="M900.01507,378.48644l32.29583-13.12018,7.56934-5.55084,22.708,100.4198,15.13867-45.416-4.54163-58.03155,41.88361,21.69876-14.12939,68.6286-2.0185,26.24036,6.05548,21.19412s21.19409,15.13867,14.1294,31.28656-15.13867,17.15716-15.13867,17.15716-34.31434-32.2958-36.33277-40.36978-5.0462-22.20337-5.0462-22.20337-17.15717,64.59165-37.342,63.58237-20.18488-22.20337-20.18488-22.20337l5.04621-22.20337,8.074-23.21261-4.037-38.35129Z" transform="translate(-122.02369 -130.38786)" fill="#2f2e41"/><path d="M1076.97631,769.61214h-268a1,1,0,0,1,0-2h268a1,1,0,0,1,0,2Z" transform="translate(-122.02369 -130.38786)" fill="#ccc"/></svg>
        </div>

        <div class="row justify-content-around">
            <div class="col-md-2">
                <a href="/ser" class="text-decoration-none text-left"><h3>< View all Services</h3></a>
            </div>   
            <div class="col-md-5"> 
                <a href="exstate" class="text-decoration-none text-right"><h3>Go Expenditure Statement Page ></h3></a>
            </div>  
        </div> 
        
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-10 col-md-5">
            <img src="logo.png" class="" alt="supermarket" style="width:80px; height:80px">
            <h4>Ravishka Mini-Supermarket</h4>
            <small class="d-block mb-3 text-muted">&copy; 2022-2023</small>
          </div>
          <div class="col-6">
            <h2>Services</h2>
            <ul class="list-unstyled text-small">
              <li style="font-size: 20px"><a class="text-muted" href="#">Order management for wholesale buyers</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Employee management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Stock management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Supplier's management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Transport management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Debtor's management</a></li>
              <li style="font-size: 20px"><a class="text-muted" href="#">Financialmanagement</a></li>
            </ul>
            </div>
        </div>
      </footer>

    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>