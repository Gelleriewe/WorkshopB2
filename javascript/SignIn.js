$(document).ready(function(){

   $( "#Signin" ).load( "SQL-query/Log_in.php" );
   $(document).ready(function(){
  $('select').formSelect();
});
 });


function changeform(){

   $( "#Signin" ).load( "SQL-query/Sign_In.php" );

};
function Backform(){

   $( "#Signin" ).load( "SQL-query/Log_in.php" );

};
