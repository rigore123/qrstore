function submitData(){
   $(document).ready(function(){
       var data = {
           funcion: 'valusr',
           username: $('#username').val(),
           usrpassword: $('#usrpassword').val()
       };

       $.ajax({
           url: 'modelo.php',
           type: 'post',
           data: data,
           success:function(response){
               window.alert(response);
               if(response == "HAY"){
                   window.alert("EXISTE USUARIO");
               }
               if(response == "NOHAY"){
                   window.alert("NO EXISTE USUARIO");
               }


           }
        
       });

   })
}

function UsrExist(){
    $(document).ready(function(){
        var data = {
            funcion: 'usrExist',
            name: $('#username').val(),
            username: $('#username').val()
        };
 
        $.ajax({
            url: 'modelo.php',
            type: 'post',
            data: data,
            success:function(response){
                window.alert(response);
                if(response == "HAY"){
                    window.alert("EXISTE USUARIO");
                }
                if(response == "NOHAY"){
                    window.alert("NO EXISTE USUARIO");
                }
 
 
            }
         
        });
 
    })
 }
 

 function submitregist()
 {

   
    $(document).ready(function(){
        var username1 =document.getElementById("username").value;
        var usremail1 =document.getElementById("usremail").value;
        var usrpass2 =document.getElementById("usrpass2").value;
    

        var data = {
            funcion: 'submitregist',
            username1: username1,
            usremail1: usremail1,
            usrpass2: usrpass2
                };


        $.ajax({
            url: 'modelo.php',
            type: 'post',
            data: data,
            success: function(response){
             window.alert(response);
                if(response == "HAY"){
                    window.alert("EXISTE USUARIO");
                }
                if(response == "NOHAY"){
                    window.alert("NO EXISTE USUARIO");
                }
 
 
            }
         
        });
 
    })
 }