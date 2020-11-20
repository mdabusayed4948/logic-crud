
$(document).ready(function()
{
    //---------Append Form Data-------------------

    $(".tables").on("click", ".appendCategory", function()
    {

        var idCategory = $(this).attr("idCategory");
        //alert(idCategory);

        $("#longname").val(idCategory);
        $("#hidelongname").val(idCategory);

    });

    //---------Insert Form Data-------------------

    $('#message_form').on('click', '#btnAdd', function(event)
    {
        event.preventDefault();
        
        var longname = $('#longname').val();
        var shortname = $('#shortname').val();
        var description = $('#description').val();
        
        if( longname != '' &&  shortname !='' &&  description != ''){

            $.ajax({
                url: 'insert.php',
                method: 'POST',
                cache: false,
                data: {longname:longname,shortname:shortname,description:description},
                success: function(data){
                    
                    $("#message_form")[0].reset("");
                    fetchFormData();
                    $("#longname").css( 'border-color' , '');
                    $("#shortname").css( 'border-color' , '');
                    $("#description").css({'border-color': ''});
                }
            });
            
           
            
        }else{

            if(longname == ''){

                $("#longname").css("border-color" , "red");
    
               }else{
    
                $("#longname").css( 'border-color' , '');
    
               }
    
               if(shortname == ''){
    
                $("#shortname").css("border-color" , "red");
    
               }else{
    
                $("#shortname").css( 'border-color' , '');
                
               }
    
               if(description == ''){
    
                $("#description").css({'border-color': 'red'});
    
               }else{
    
                $("#description").css({'border-color': ''});
                
               }
            
        }
    });

    
    //---------Fetch Form Data-------------------

    function fetchFormData()
    {
        
        $('#myTable').DataTable( {
           
            "ajax": {
                url: "fetch.php",
                
                
            },
            "bDestroy": true,
            "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
        } );

        // $.ajax({
        //     url: "fetch1.php",
        //     method: "POST",
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     dataType: "json",
        //     success:function(data)
        //     {
        //         $("#fetchdata").html(data);
        //     }
        // });

    }

    fetchFormData();

    //---------Edit Form Data-------------------

    $(".tables").on("click",".btnEditLogic", function(){
   
        var idLogic = $(this).attr("idLogicdata");
        //console.log("idLogic",idLogic);

    
        var data = new FormData();
        data.append("idLogic", idLogic);
    
        $.ajax({
    
            url: "editlogic.php",
            method: "POST",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType:"json",
            success: function(answer){
                
                //console.log("answer", answer);
                $("#idLogic").val(answer["id"]);
                $("#longname").val(answer["longname"]);
                $("#hidelongname").val(answer["longname"]);
                $("#shortname").val(answer["shortname"]);
                $("#description").val(answer["description"]);

                $("button#btnAdd").hide();
                
                $("button#btnEdit").show();
                
                $("button#btnDelete").show();

                
                               
            }
    
        });
         
    
    });

    //---------Update Form Data-------------------

    $('#message_form').on('click', '#btnEdit', function(event)
    {
        event.preventDefault();
        
        var id          = $('#idLogic').val();
        var longname    = $('#longname').val();
        var shortname   = $('#shortname').val();
        var description = $('#description').val();
        
        if(id !='' && longname !='' &&  shortname !='' &&  description !=''){

            
            $.ajax({
                url: 'update.php',
                method: 'POST',
                data: {id:id,longname:longname,shortname:shortname,description:description},
                success: function(data){

                    //console.log(data);
                                        
                    $("#message_form")[0].reset("");
                    fetchFormData();
                    $("#btnAdd").show();
                    $("button#btnEdit").hide();                
                    $("button#btnDelete").hide();

                   
                }
            });
 

        }
    });

    //---------Delete Form Data-------------------

    $('#message_form').on('click', '#btnDelete', function(event)
    {
        event.preventDefault();
        
        var id = $('#idLogic').val();

        swal({
            title: 'Are you sure you want to delete this Item?',
            text: "If you're not you can cancel the action!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'cancel',
            confirmButtonText: 'Yes, delete Item!'
          }).then(function(result){
            if (result.value) {
              
                $.ajax({
                    url: 'delete.php',
                    method: 'POST',
                    data: {id:id},
                    success: function(data){
    
                        //console.log(data);
                        
                        $("#message_form")[0].reset("");
                        fetchFormData();
                        $("#btnAdd").show();
                    }
                });
            }
    
      })
        
        
    });

    
    $("button#btnEdit").hide();
                
    $("button#btnDelete").hide();

});



