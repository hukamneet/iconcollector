/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){

   $('#signup').submit(function(){
   var data={
       signupform:'signup',
       fname:$('#fname').val(),
       uname:$('#uname').val(),
       email:$('#email').val(),
       pass:$('#pass').val()
   };

   $.ajax({

       url:'controller/pageController.php',
       data:data,
       type:'post',
       success:function(msg){

           //alert(msg);
           $('#signup')[0].reset();
       }
   });
return false;

   });



   $('#login').submit(function(){
   var data={
       loginform:'login',

       email:$('#email').val(),
       pass:$('#pass').val()
   };

   $.ajax({

       url:'controller/LoginController.php',
       data:data,
       type:'post',
       success:function(msg){

           //alert(msg);
           $('#login')[0].reset();
           if(msg=='success')
               {
                    window.location.href = "index.php";
               }
               else
                   {
                       alert("OOPS!! TRY AGAIN");
                   }
           
       }
   });
return false;

   });
});


