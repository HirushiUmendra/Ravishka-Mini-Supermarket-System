<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Expenditure Page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>

  <body>

  <!--header-->
  <main role="main">
      <div class="jumbotron">
        <div class="container" style="text-align:center; margin-bottom:-10px">
            <img src="logo.png" alt="supermarket" style="width:150px; height:150px">
            <h1 class="display-3">Ravishka Mini Supermarket</h1>
        </div>  
    </div>
    <br><br>
      <div class="title">
          <h2><center>Expenditure Page</center></h2>
          <br>

          <!--Generate successfull message-->
          @if(session('message'))
            <center><h5 style="color:green">{{ session('message') }}</h5></center>
          @endif 

          <br><br><br>
      </div>
           
            <!--create expense form-->
            <form method="post" action="/update"> 

              <div class="row justify-content-around">

                <label for="expenseTitle" class="col-sm-2 col-form-label"><h5>Type of Expense</h5></label>
                    @foreach ($posts as $post)
                    <div class="col-md-2 mb-5">
                        <!--view type of expense-->
                        <input type="text" class="form-control form-control-lg" name="expense1" value= "{{
                            $post->type_of_expense
                        }}" readonly>
                    </div>
                    @endforeach
              
                </div> 

                <div class="row justify-content-around">

                <label for="expenseID" class="col-sm-2 col-form-label"><h5>Expense ID</h5></label>
                    @foreach ($posts as $post)
                    <div class="col-md-2 mb-5">
                        <!--view expense id-->
                        <input type="text" class="form-control form-control-lg" name="expenseid1" value= "{{
                            $post->expense_id
                        }}" readonly>
                    </div>
                    @endforeach

                   </div>

                <div class="row justify-content-around">

                    <label for="expenseDate" class="col-sm-2 col-form-label"><h5>Expense Date</h5></label>
                        @foreach ($posts as $post)
                        <div class="col-md-2 mb-5"> 
                            <!--view expense date-->
                            <input type="text" class="form-control form-control-lg" name="date1" value= "{{
                                $post->e_date
                        }}" readonly>          
                        </div> 
                        @endforeach

                    </div>
 
                    <div class="row justify-content-around">

                        <label for="monthExpense" class="col-sm-2 col-form-label"><h5>Monthly Expense(Rs.)</h5></label>
                        @foreach ($posts as $post)
                            <div class="col-md-2 mb-5">
                                <!--view monthly expense-->
                                <input type="text" class="form-control form-control-lg" name="monthexpense1" value= "{{
                                    $post->month_expense
                            }}" readonly>

                            <br><br>

                                <a class="btn btn-success btn-lg" href="{{'eupdate/'.$post->expense_id }}" role="button"|>UPDATE</a>   
                                <a class="btn btn-primary btn-lg" href="{{'delete/'.$post->expense_id }}" role="button"|>DELETE</a>

                            </div>
                        @endforeach
                    </div> 

            </form>  
            
            <br><br>
            
              <!--go piechart page-->
              <a href="pie" class="link-dark text-decoration-none text-center"><h2>View Monthly Expenses Pie Chart</h2></a>

            <br> <br> <br>
         
              <center><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="837.47998" height="500" viewBox="0 0 837.47998 673" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M182.35227,706.79523c3.3177-26.67813,19.85136-52.96384,45.29423-61.64563a123.86326,123.86326,0,0,0,.00614,85.04047c3.90959,10.5753,9.35913,21.9305,5.68164,32.5888-2.28808,6.63189-7.88558,11.70587-14.14246,14.87849-6.25726,3.17263-13.20151,4.68476-20.05886,6.16664l-1.34956,1.11617C186.89746,760.35917,179.03457,733.47336,182.35227,706.79523Z" transform="translate(-181.26001 -113.5)" fill="#f0f0f0"/><path d="M227.899,645.654a105.86968,105.86968,0,0,0-26.31905,59.58345,45.591,45.591,0,0,0,.51859,14.27516,26.14855,26.14855,0,0,0,6.50348,12.12823c2.93125,3.22058,6.30256,6.17543,8.3999,10.05247a16.01079,16.01079,0,0,1,.78221,13.07062c-1.85173,5.3111-5.5014,9.64009-9.21758,13.74946-4.12612,4.56266-8.48415,9.23647-10.23806,15.28536-.21251.7329-1.33731.36031-1.12512-.37149,3.05151-10.524,13.26755-16.50188,18.13956-25.98073,2.27337-4.423,3.22758-9.55792,1.09634-14.22685-1.86369-4.08278-5.33761-7.13282-8.33375-10.36808a27.9024,27.9024,0,0,1-6.80084-11.62187,42.14789,42.14789,0,0,1-1.06552-14.20255,102.71257,102.71257,0,0,1,7.50152-31.21348A107.74713,107.74713,0,0,1,227.115,644.7654c.5066-.56729,1.2873.32506.784.88864Z" transform="translate(-181.26001 -113.5)" fill="#fff"/><path d="M201.89886,698.06712a15.88383,15.88383,0,0,1-12.09074-16.6389c.06037-.76,1.24414-.70184,1.18369.05912A14.70808,14.70808,0,0,0,202.27035,696.942c.74175.17636.366,1.30047-.37149,1.12512Z" transform="translate(-181.26001 -113.5)" fill="#fff"/><path d="M206.90066,730.20367A30.6148,30.6148,0,0,0,220.572,712.57179c.21509-.73212,1.33995-.35975,1.12511.3715a31.844,31.844,0,0,1-14.26356,18.31864c-.657.38974-1.18635-.67064-.5329-1.05826Z" transform="translate(-181.26001 -113.5)" fill="#fff"/><path d="M213.48027,665.55765a8.991,8.991,0,0,0,8.52045-.43253c.65175-.39787,1.18041.663.53289,1.05826a10.07513,10.07513,0,0,1-9.42483.49938.61231.61231,0,0,1-.37681-.7483.59541.59541,0,0,1,.7483-.37681Z" transform="translate(-181.26001 -113.5)" fill="#fff"/><path d="M305.2,692.8c-.3999.26-.7998.52-1.20019.79A118.40629,118.40629,0,0,0,288.86011,705.41c-.37012.33-.74024.67-1.1001,1.01A124.82709,124.82709,0,0,0,260.65015,743.53,121.22249,121.22249,0,0,0,254.01,760.71c-2.4502,8.13-4.46,17.14-9.31006,23.79a20.7951,20.7951,0,0,1-1.62012,2H199.24976c-.09961-.05-.19971-.09-.29981-.14l-1.75.08c.07031-.31.1499-.63.22022-.94.04-.18.08984-.36.12988-.54.02978-.12.06006-.24.08008-.35.00976-.04.02-.08.02978-.11.02-.11.0503-.21.07031-.31q.65993-2.685,1.35987-5.37c0-.01,0-.01.00976-.02,3.59034-13.63,8.3501-27.08,15-39.38.2002-.37.39991-.75.62012-1.12a115.6734,115.6734,0,0,1,10.39014-15.76,102.26018,102.26018,0,0,1,6.81006-7.79A85.03649,85.03649,0,0,1,253.2,698.81c15.72022-8.3,33.91992-11.48,50.72022-6.41C304.34985,692.53,304.77026,692.66,305.2,692.8Z" transform="translate(-181.26001 -113.5)" fill="#f0f0f0"/><path d="M305.10141,693.35628a105.86979,105.86979,0,0,0-56.88764,31.72816,45.59145,45.59145,0,0,0-8.18056,11.71015,26.14859,26.14859,0,0,0-2.10937,13.59926c.40143,4.33627,1.31421,8.72531.65457,13.08365a16.01082,16.01082,0,0,1-7.24486,10.9071c-4.67616,3.12574-10.19656,4.38486-15.63785,5.42855-6.04151,1.15883-12.33511,2.26677-17.37736,6.04049-.61093.45724-1.28469-.51746-.67468-.974,8.77265-6.56563,20.52867-5.18785,30.12561-9.82289,4.47812-2.1628,8.33158-5.68823,9.44092-10.69928.97006-4.38194.03267-8.90876-.41174-13.29581a27.90252,27.90252,0,0,1,1.56708-13.374,42.148,42.148,0,0,1,7.70016-11.98145,102.71275,102.71275,0,0,1,24.78222-20.40579,107.74717,107.74717,0,0,1,34.16254-13.12569c.74605-.14793.83214,1.03459.091,1.18156Z" transform="translate(-181.26001 -113.5)" fill="#fff"/><path d="M252.78548,719.55133a15.88384,15.88384,0,0,1,.364-20.56469c.50575-.57044,1.41593.18867.90951.75986a14.7081,14.7081,0,0,0-.29949,19.13015c.48607.58739-.49073,1.25871-.974.67468Z" transform="translate(-181.26001 -113.5)" fill="#fff"/><path d="M237.43072,748.222a30.61478,30.61478,0,0,0,21.53141-5.847c.61253-.45506,1.28648.5195.67468.974a31.844,31.844,0,0,1-22.41775,6.03877c-.75924-.0844-.54346-1.24974.21166-1.16581Z" transform="translate(-181.26001 -113.5)" fill="#fff"/><path d="M281.60554,700.56714a8.991,8.991,0,0,0,7.06351,4.78455c.75993.07473.54333,1.24-.21166,1.1658a10.07514,10.07514,0,0,1-7.82586-5.27567.61234.61234,0,0,1,.14966-.82435.59543.59543,0,0,1,.82435.14967Z" transform="translate(-181.26001 -113.5)" fill="#fff"/><path d="M925.30875,176.717A201.59192,201.59192,0,0,0,786.5149,113.5V315.51094Z" transform="translate(-181.26001 -113.5)" fill="#3f3d56"/><path d="M925.30875,201.87,786.5149,340.6639H980.483A201.48466,201.48466,0,0,0,925.30875,201.87Z" transform="translate(-181.26001 -113.5)" fill="#e4e4e4"/><path d="M980.69019,355.18a202.72861,202.72861,0,0,1-3.48,37.53c-.18018.98-.37012,1.95-.57032,2.92A200.54383,200.54383,0,0,1,953.24,456.95c-.58984,1.02-1.2002,2.04-1.81006,3.04V460a202.8148,202.8148,0,0,1-40.6001,48.03c-.79.68994-1.58007,1.37-2.37988,2.04A201.30777,201.30777,0,0,1,786.51,557.19V355.18Z" transform="translate(-181.26001 -113.5)" fill="#f0f0f0"/><path d="M766.892,557.36638c2.685,0,5.35388-.0685,8.01382-.17224V355.17523L627.98952,502.09137A201.488,201.488,0,0,0,766.892,557.36638Z" transform="translate(-181.26001 -113.5)" fill="#cacaca"/><path d="M767.16646,138.47276c-111.6673,0-202.19114,90.52408-202.19114,202.19114H775.38955V138.653C772.66065,138.54379,769.92229,138.47276,767.16646,138.47276Z" transform="translate(-181.26001 -113.5)" fill="#00b0ff"/><path d="M718.92993,355.18l-42.50976,42.51L675.03,399.08l-.03027.03-37.06983,37.06-1.40967,1.41L596.47,477.63l-1.41016,1.41v.01L572.01,502.09a201.60824,201.60824,0,0,1-63.29-146.91Z" transform="translate(-181.26001 -113.5)" fill="#00b0ff"/><path d="M389.13146,539.19657A12.37584,12.37584,0,0,0,392.001,520.438l1.66834-90.93656L373.74,431.171l.04678,88.65447a12.44288,12.44288,0,0,0,15.34469,19.37111Z" transform="translate(-181.26001 -113.5)" fill="#ffb6b6"/><path d="M396.81148,451.76137l-26.0644-2.48524a5.18412,5.18412,0,0,1-4.54083-6.40341l6.25905-25.3418a14.39729,14.39729,0,0,1,28.65633,2.81714l1.359,25.98342a5.18412,5.18412,0,0,1-5.66912,5.42989Z" transform="translate(-181.26001 -113.5)" fill="#e4e4e4"/><polygon points="172.201 662.293 182.314 662.293 187.125 623.284 172.199 623.285 172.201 662.293" fill="#ffb6b6"/><path d="M350.881,772.49126l19.91684-.00081h.0008a12.69326,12.69326,0,0,1,12.69257,12.69237v.41246l-32.60961.00121Z" transform="translate(-181.26001 -113.5)" fill="#2f2e41"/><polygon points="265.416 662.293 275.53 662.293 280.341 623.284 265.415 623.285 265.416 662.293" fill="#ffb6b6"/><path d="M444.09663,772.49126l19.91683-.00081h.00081a12.69326,12.69326,0,0,1,12.69257,12.69237v.41246l-32.60961.00121Z" transform="translate(-181.26001 -113.5)" fill="#2f2e41"/><polygon points="253.206 348.908 259.805 390.979 197.111 391.804 205.36 351.383 253.206 348.908" fill="#ffb6b6"/><path d="M439.24512,494.20618c19.89318,34.65158,21.59119,152.14917,22.44256,273.50548H444.777l-40.421-177.02921L367.23479,763.09018H350.73644L362.28529,569.2346s-3.40565-38.909,14.02359-61.8688l4.24242-12.2567Z" transform="translate(-181.26001 -113.5)" fill="#2f2e41"/><path d="M388.77121,485.64318a5.61991,5.61991,0,0,1-1.09015-.10759h0a5.63749,5.63749,0,0,1-4.51581-5.10751c-.62015-8.49062-3.69286-23.27-9.13282-43.92841a34.76773,34.76773,0,0,1,54.89983-36.30506,34.31861,34.31861,0,0,1,13.241,23.46926c2.70366,23.80964-2.39349,47.715-4.71026,56.88767a5.6498,5.6498,0,0,1-5.3553,4.25611l-43.21634.8342C388.85123,485.64274,388.81133,485.64318,388.77121,485.64318Z" transform="translate(-181.26001 -113.5)" fill="#e4e4e4"/><path d="M509.50972,409.26321a12.12675,12.12675,0,0,0-.63782,1.7998l-54.09464,18.3818-10.45267-9.13149-15.84284,13.97373,16.9334,17.9638a9.21617,9.21617,0,0,0,10.89866,1.8858l57.88459-29.56733a12.09288,12.09288,0,1,0-4.68868-15.30611Z" transform="translate(-181.26001 -113.5)" fill="#ffb6b6"/><path d="M452.89148,430.44949l-19.71982,17.22376a5.18412,5.18412,0,0,1-7.77214-1.103L411.29444,424.606a14.39729,14.39729,0,0,1,21.7424-18.87829L452.844,422.59962a5.18411,5.18411,0,0,1,.04749,7.84987Z" transform="translate(-181.26001 -113.5)" fill="#e4e4e4"/><circle cx="403.14449" cy="361.09024" r="26.50798" transform="translate(-288.32795 428.13085) rotate(-61.33683)" fill="#ffb6b6"/><path d="M410.44187,324.39987h-5.37543a26.581,26.581,0,0,0-7.97161-1.21337q-.6683,0-1.32864.03254a24.45493,24.45493,0,0,0-21.95128,17.59828c-6.01032,20.06236-3.41416,42.261-3.41416,42.261,8.77263,3.96774,22.18069,6.90406,41.98263,4.48947l2.912-12.20647-.24291,11.84248q4.18665-.58244,8.73648-1.50456V359.58752h12.13367C435.92258,340.14935,429.88,324.39987,410.44187,324.39987Z" transform="translate(-181.26001 -113.5)" fill="#2f2e41"/><path d="M1016.24,558.5h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-181.26001 -113.5)" fill="#f0f0f0"/><path d="M1016.74,686V305a1,1,0,0,1,2,0V686a1,1,0,0,1-2,0Z" transform="translate(-181.26001 -113.5)" fill="#f0f0f0"/><circle cx="778.47998" cy="480" r="16" fill="#f0f0f0"/><circle cx="389.47998" cy="29" r="16" fill="#f0f0f0"/><path d="M564.26,785.5a.9965.9965,0,0,1-1,1h-381a1,1,0,1,1,0-2h381A.9965.9965,0,0,1,564.26,785.5Z" transform="translate(-181.26001 -113.5)" fill="#cacaca"/><path d="M595.06006,479.04834A183.284,183.284,0,0,1,540.86133,355.252l3.99756-.14355a179.29733,179.29733,0,0,0,53.021,121.103Z" transform="translate(-181.26001 -113.5)" fill="#3f3d56"/><path d="M637.97,436.21l-2.8999,2.74a183.90054,183.90054,0,0,1-45.24024-83.3l1.94043-.47h2.05957a179.99145,179.99145,0,0,0,44.1001,80.99Z" transform="translate(-181.26001 -113.5)" fill="#3f3d56"/><path d="M676.53,397.83l-1.5,1.25-.03027.03-1.53955,1.28a183.75927,183.75927,0,0,1-27.46045-44.41l1.83007-.8h2.19043a179.583,179.583,0,0,0,26.39991,42.51A1.3086,1.3086,0,0,0,676.53,397.83Z" transform="translate(-181.26001 -113.5)" fill="#3f3d56"/></svg></center>
               <br><br>

              <div class="row justify-content-around">
                <div class="col-md-2">
                  <a href="/exstate" class="text-decoration-none text-left"><h3>< Back</h3></a>
                </div>   
                <div class="col-md-5"> 
                  <a href="/profit" class="text-decoration-none text-right"><h3>Next ></h3></a>
              </div> 
            </div>

    </main>

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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>