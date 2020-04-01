
  
     
<!DOCTYPE html>
<html lang="en">
  <head>



    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sudoku</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
    <LINK REL=StyleSheet HREF="style_index.css" TYPE="text/css" MEDIA="screen">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="genSudo.js"></script>
    <script>
      
      
      var ans;
      function probar(){
                      generarSudoku()
                      var parametros ={
                        "sudo":str
                      };
                   
                    $.ajax({
                          data: parametros,
                          url: 'cargar.php',
                          type: 'post',
                          success: function( data ) {
                            
                            
                            if(data!="vacio"){
                              
                              clearInterval(ans);
                              imprimirSudoku();
                              document.getElementById('valor').value=data;
                              
                             }
                          }
                    });

              }


      function run(){
        
        ans=setInterval(probar,200);
     }

     function comparar(){
      var cont=0;
      var err=0;
      var list=document.getElementById('valor').value;
      var aux=list.split(',');

      
      
      
            for(var i = 0; i < 9; i++){
                for(var j = 0; j < 9; j++){
                    
                    if (document.getElementById("cell-"+cont).value !=aux[cont]) {
                        err++;
                    }

                    cont++;

                }
            }
            if(err==0){
              alert('Felicitaciones esta correcto')

            }else{
              alert('Tiene '+err+' errores');
            }

     }


     function cargar(){

      var cont=0;
      var aux=document.getElementById('valor').value.split(',');
      
      alert(aux[0]);
            for(var i = 0; i < 9; i++){
                for(var j = 0; j < 9; j++){

                  
                  document.getElementById("cell-"+cont).value=aux[cont];
                  cont++;

                }
            }

     }
      
      
     </script>
 

  </head>
  
  <body>





<input type="text" name="btn" id="valor" name="valor" value=""   />
<br/>
<script>
  
</script>


<div class="container">
  
  <h1>Tu Sudoku online</h1>
  <!-- <form method="POST" action="" name="formu">  -->
    
  <table id="grid">

    <tr>
      <td><input id="cell-0"  type="text"></td>
      <td><input id="cell-1"  type="text"></td>
      <td><input id="cell-2"  type="text"></td>
      
      <td><input id="cell-3"  type="text"></td>
      <td><input id="cell-4"  type="text"></td>
      <td><input id="cell-5"  type="text"></td>
      
      <td><input id="cell-6"  type="text"></td>
      <td><input id="cell-7"  type="text"></td>
      <td><input id="cell-8"  type="text"></td>
    </tr>

    <tr>
      <td><input id="cell-9"  type="text"></td>
      <td><input id="cell-10" type="text"></td>
      <td><input id="cell-11" type="text"></td>
      
      <td><input id="cell-12" type="text"></td>
      <td><input id="cell-13" type="text"></td>
      <td><input id="cell-14" type="text"></td>
      
      <td><input id="cell-15" type="text"></td>
      <td><input id="cell-16" type="text"></td>
      <td><input id="cell-17" type="text"></td>
    </tr>

    <tr>          
      <td><input id="cell-18" type="text"></td>
      <td><input id="cell-19" type="text"></td>
      <td><input id="cell-20" type="text"></td>
      
      <td><input id="cell-21" type="text"></td>
      <td><input id="cell-22" type="text"></td>
      <td><input id="cell-23" type="text"></td>
      
      <td><input id="cell-24" type="text"></td>
      <td><input id="cell-25" type="text"></td>
      <td><input id="cell-26" type="text"></td>
    </tr>

    <tr>          
      <td><input id="cell-27" type="text"></td>
      <td><input id="cell-28" type="text"></td>
      <td><input id="cell-29" type="text"></td>
      
      <td><input id="cell-30" type="text"></td>
      <td><input id="cell-31" type="text"></td>
      <td><input id="cell-32" type="text"></td>
      
      <td><input id="cell-33" type="text"></td>
      <td><input id="cell-34" type="text"></td>
      <td><input id="cell-35" type="text"></td>
    </tr>

    <tr>          
      <td><input id="cell-36" type="text"></td>
      <td><input id="cell-37" type="text"></td>
      <td><input id="cell-38" type="text"></td>
      
      <td><input id="cell-39" type="text"></td>
      <td><input id="cell-40" type="text"></td>
      <td><input id="cell-41" type="text"></td>
      
      <td><input id="cell-42" type="text"></td>
      <td><input id="cell-43" type="text"></td>
      <td><input id="cell-44" type="text"></td>
    </tr>

    <tr>          
      <td><input id="cell-45" type="text"></td>
      <td><input id="cell-46" type="text"></td>
      <td><input id="cell-47" type="text"></td>
      
      <td><input id="cell-48" type="text"></td>
      <td><input id="cell-49" type="text"></td>
      <td><input id="cell-50" type="text"></td>
      
      <td><input id="cell-51" type="text"></td>
      <td><input id="cell-52" type="text"></td>
      <td><input id="cell-53" type="text"></td>
    </tr>

    <tr>          
      <td><input id="cell-54" type="text"></td>
      <td><input id="cell-55" type="text"></td>
      <td><input id="cell-56" type="text"></td>
      
      <td><input id="cell-57" type="text"></td>
      <td><input id="cell-58" type="text"></td>
      <td><input id="cell-59" type="text"></td>
      
      <td><input id="cell-60" type="text"></td>
      <td><input id="cell-61" type="text"></td>
      <td><input id="cell-62" type="text"></td>
    </tr>

    <tr>          
      <td><input id="cell-63" type="text"></td>
      <td><input id="cell-64" type="text"></td>
      <td><input id="cell-65" type="text"></td>
      
      <td><input id="cell-66" type="text"></td>
      <td><input id="cell-67" type="text"></td>
      <td><input id="cell-68" type="text"></td>
      
      <td><input id="cell-69" type="text"></td>
      <td><input id="cell-70" type="text"></td>
      <td><input id="cell-71" type="text"></td>
    </tr>

    <tr>          
      <td><input id="cell-72" type="text"></td>
      <td><input id="cell-73" type="text"></td>
      <td><input id="cell-74" type="text"></td>
      
      <td><input id="cell-75" type="text"></td>
      <td><input id="cell-76" type="text"></td>
      <td><input id="cell-77" type="text"></td>
      
      <td><input id="cell-78" type="text"></td>
      <td><input id="cell-79" type="text"></td>
      <td><input id="cell-80" type="text"></td>
    </tr>

  </table>


   
</div>

    
        

      
<input type="button" name="generar" id="btn"  value="generar" onclick="run();"  />
<input type="button" name="comparar" id="btn"  value="comparar" onclick="comparar()"  />
<input type="button" name="cargar" id="btn"  value="cargar" onclick="cargar()"  />



  </body>
</html>