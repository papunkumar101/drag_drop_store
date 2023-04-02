<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web App</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/6a43f37e2c.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <style>
          .text-bold{
            font-weight:800;
            text-align:center;
            color:#fff;
          }
        </style>
    </head>
   <body>

   <div class="container">
   <div class="pricing-header px-3 mx-auto">
      <h1 class="display-4">Result page</h1>
      <p class="lead">Use submited time to know your answer</p> 
    </div>
    <div class="row my-5">
        <div class="col-12">
            <!-- questions table  -->
            <?php 
              foreach($result_page as $result){
                $result_arr = unserialize(base64_decode($result['submited_ans']));
                // echo '<pre/>';print_r($result_arr);exit;
            ?>
            <span class="lead">User ID : <strong><?=$result['user_id']?></strong></span><br>
            <span class="lead">Submited Time : <strong><?=$result['added_date']?></strong></span><br>
            
            <table class="table table-hover border table-bordered">
                <thead>
                    <tr>
                    <th scope="col">sl no</th>
                    <th scope="col" class="questions">Questions</th>
                    <th scope="col" class="answers">Right Answer</th> 
                    <th scope="col" class="answers">Your Answer</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach($questions as $key => $value){ 
                      // $mark += ($value['answer'] == $result_arr[$key])? 1:0;
                      ?> 
                    <tr class="no_of_question">
                        <th scope="row"><?=$value['id']?></th>
                        <td class="question"><?=$value['question']?></td>
                        <td class="answer"><?=$value['answer']?></td> 
                        <td class="answer text-bold <?=($value['answer'] == $result_arr[$key])?'bg-success':'bg-danger';?>"><?=$result_arr[$key]?></td> 
                    </tr>
                    <?php } ?>
                </tbody>
                </table>   <br><br><hr><br>   
              <?php }?>
              </div>
    </div>

   </div>

   </body>
</html>
