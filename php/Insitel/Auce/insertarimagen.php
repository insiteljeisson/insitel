<?php
  // unlink() 
 mkdir("../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/3Falla/".$Idimagen,0777,true);
            mkdir("../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/4Solucion/".$Idimagen1,0777,true);
            $ruta="../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/3Falla/".$Idimagen."/".$name;
                         $ruta1="../../../img/archivos/Externos/".$externo."/".$fecha."/".$consecutivo."/4Solucion/".$Idimagen1."/".$name1;  
                          

   // foreach ($_FILES['seleccionArchivos1']['tmp_name'] as $key => $tmp_name) {
   //        // code... 
   
              if(!file_exists($ruta)){ 
                                                
                    move_uploaded_file($tmp ,$ruta);
                      // echo "<script>alert('archivo 1 agregado correctamente');</script>";
                        // $archivo ="";

                        }else{          
                        
                        echo "<script>alert('ya existe el archivo seleccionado intente con otro');window.history.back(-1);</script>";
                          // $archivo ="";
                          die;
                            }
                          

             
      
              if(!file_exists($ruta1)){ 
                                                
                    move_uploaded_file($tmp1 ,$ruta1);
                      // echo "<script>alert('archivo 2 agregado correctamente');window.history.back(-1);</script>";
                        // $archivo1 ="";
                        
                        }else{          
                        
                         echo "<script>alert('ya existe el archivo seleccionado intente con otro');window.history.back(-1);</script>";
                          // $archivo1 ="";
                          die;
                            }
                             
                                                
?>
