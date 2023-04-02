

   <div class="container main-cont">

   <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Drag and Drop</h1>
      <p class="lead">To develop a screen that allows user to sort the order of questions using drag and drop UI.</p>
      <p class="lead">drag and drop the options to the respected question's answer, and  <a href="<?=base_url('result-page')?>">click here</a> to see all the submits and results</p>
    </div>

    <div class="row">
        <div class="col-md-8 col-12">
            <!-- questions table  -->
            <table class="table table-hover border table-bordered">
                <thead>
                    <tr>
                    <th class="fit" scope="col">Question No.</th>
                    <th class=" questions" scope="col">Questions</th>
                    <th lass="fit answers" scope="col">Answer</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach($questions as $key => $value){ ?>
                    <tr class="no_of_question">
                        <th scope="row"><?=$value['id']?></th>
                        <td class="question fit"><?=$value['question']?></td>
                        <td class="answer handy" id="ans_<?=$value['id']?>"></td> 
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                <div class="text-right"><button type="button" class="btn btn-primary submit">Submit</button></div>
        </div>
        <div class="col-md-4 col-12">
            <!-- options table  -->
            <table class="table table-hover text-center border"> 
                <tbody>
                <thead>
                    <tr>
                      <th scope="col">Options</th> 
                    </tr>
                </thead>
                <?php  foreach($answer as $key => $value){ ?>
                    <tr> 
                        <td class="option handy"> <div class="crd"><?=$value['answer']?></div></td> 
                    </tr> 
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
   </div>

   <div class="container">
    <div class="submit-success hide text-center">
      <img src="https://freepngimg.com/thumb/success/6-2-success-png-image.png" alt="" width="250px">
       <h1 class="display-4 text-success text-bold">Submitted Successfuly</h1>
        <p class="lead"><a href="<?=base_url('result-page')?>">click to see your result</a></p>
      </div>
   </div>

<script>
    $(document).ready(function() {
   // Drag and drop fun
  function dragAndDrop(dragTarget, dropTarget) {
    $(dragTarget).draggable({ revert: true });
    $(dropTarget).droppable({
      drop: function(event, ui) {
        $(this).append(ui.draggable);
        ui.draggable.css({
          position: "static",
          top: "auto",
          left: "auto"
        });
        ui.draggable.css({
          position: "relative"
        });
      }
    });
  }
  dragAndDrop(".crd", ".answer");
  dragAndDrop(".crd", ".option");





  // Submit answer
  $(".submit").on("click", function() { 
         var ans_data = [];
         var base_url = "<?=base_url()?>";
        $(".no_of_question").each(function () {
            // alert($(this).find(".answer").text());
            var answr = $(this).find(".answer").text();
            ans_data.push(answr);
        });
        // console.log(ans_data);
        $.ajax({
            url:base_url+'answer-submit',
            method:'POST',
            datatype:'application/json',
            data:{submit_data:ans_data},
            success:function(res){
              // console.log(res);
              $('.submit-success').removeClass('hide');
              $('.main-cont').addClass('hide');
            }
        });
  });


});
</script>