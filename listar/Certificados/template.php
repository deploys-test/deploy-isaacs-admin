<?php


//session_start();

// Llamamos las librerias de PHPWord
require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

// Varible que se enviara al word ---  Aqui seleccionamos el word a desarrollar
$templateWord = new TemplateProcessor('Certificados.docx');

// Conexion Base de Datos
$Conexion = mysqli_connect("localhost", "root", "root", "Isaacs_Admins")
        or die ("echo '<script type=\"text/javascript\">alert(\"Error al conectar a la base de datos\");</script>'");

// Id del registro pasador por get
$Id = $_GET['id'];

$mes[0]="-";
$mes[1]="enero";
$mes[2]="febrero";
$mes[3]="marzo";
$mes[4]="abril";
$mes[5]="mayo";
$mes[6]="junio";
$mes[7]="julio";
$mes[8]="agosto";
$mes[9]="septiembre";
$mes[10]="octubre";
$mes[11]="noviembre";
$mes[12]="diciembre";

/* Definición de los das de la semana */

$dia[0]="Domingo";
$dia[1]="Lunes";
$dia[2]="Martes";
$dia[3]="Miércoles";
$dia[4]="Jueves";
$dia[5]="Viernes";
$dia[6]="Sábado";

/* Implementación de las variables que calculan la fecha  						*/

$gisett=(int)date("w");
$mesnum=(int)date("m");

/* Variable que calcula la hora
*/

$hora = date(" H:i",time());

$FechaTotal = "";

$FechaTotal = $dia[$gisett]." ".date("d")." de ".$mes[$mesnum]." de ".date("Y")." ";
/* Presentación de los resultados en una forma similar a la siguiente:
Jueves, 1 de julio de 2010 | 15:56
*/

// Consulta a la base de datos

$Consulta = mysqli_query($Conexion, "SELECT E.Est_Nombre, E.Est_Apellidos, E.G_Id, NE.NivelE_Nombre, E.Est_AnoLectivo
                                     FROM Estudiantes E, Ciudades C, Nivel_Educacion NE
                                     WHERE C.Ciud_Id=E.Ciud_Id AND NE.NivelE_Id=E.NivelE_Id AND E.Est_Id = $Id")
                                     or die ("Error al visualizar los datos");

$ConsultaCal1 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio1
                                         FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                         WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 1 AND E.Est_Id = $Id")
                                         or die ("Error al visualizar los datos");

$ConsultaCal2 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio2
                                         FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                         WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 2 AND E.Est_Id = $Id")
                                         or die ("Error al visualizar los datos");

$ConsultaCal3 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio3
                                         FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                         WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 3 AND E.Est_Id = $Id")
                                         or die ("Error al visualizar los datos");

$ConsultaCal4 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio4
                                         FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                         WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 4 AND E.Est_Id = $Id")
                                         or die ("Error al visualizar los datos");

$ConsultaCal5 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio5
                                         FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                         WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 5 AND E.Est_Id = $Id")
                                         or die ("Error al visualizar los datos");

$ConsultaCal6 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio6
                                         FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                         WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 6 AND E.Est_Id = $Id")
                                         or die ("Error al visualizar los datos");

$ConsultaCal7 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio7
                                         FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                         WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 7 AND E.Est_Id = $Id")
                                         or die ("Error al visualizar los datos");

$ConsultaCal8 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio8
                                         FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                         WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 8 AND E.Est_Id = $Id")
                                         or die ("Error al visualizar los datos");

$ConsultaCal9 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio9
                                         FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                         WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 9 AND E.Est_Id = $Id")
                                         or die ("Error al visualizar los datos");

$ConsultaCal10 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio10
                                         FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                         WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 10 AND E.Est_Id = $Id")
                                         or die ("Error al visualizar los datos");

$ConsultaCal11 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio11
                                          FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                          WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 11 AND E.Est_Id = $Id")
                                          or die ("Error al visualizar los datos");

$ConsultaCal12 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio12
                                          FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                          WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 12 AND E.Est_Id = $Id")
                                          or die ("Error al visualizar los datos");

$ConsultaCal13 = mysqli_query($Conexion, "SELECT CAL.Cal_Promedio AS Cal_Promedio13
                                          FROM Calificaciones CAL, Estudiantes E, Asignaturas A
                                          WHERE CAL.Est_Id = E.Est_Id AND A.Asig_Id = CAL.Asig_Id AND CAL.Asig_Id = 13 AND E.Est_Id = $Id")
                                          or die ("Error al visualizar los datos");



// Variables que van a obtener la informacion
$Nombre = "";
$Apellido = "";
$Grado = "";
$NivelE = "";
$AnioLectivo = "";
$Nota1 = "";
$Nota2 = "";
$Nota3 = "";
$Nota4 = "";
$Nota5 = "";
$Nota6 = "";
$Nota7 = "";
$Nota8 = "";
$Nota9 = "";
$Nota10 = "";
$Nota11 = "";
$Nota12 = "";
$Nota13 = "";
$Ih1 = "";
$Ih2 = "";
$Ih3 = "";
$Ih4 = "";
$Ih5 = "";
$Ih6 = "";
$Ih7 = "";
$Ih8 = "";
$Ih9 = "";
$Ih10 = "";
$Ih11 = "";
$Ih12 = "";
$Ih13 = "";

// Recorrido tabla `para obtener los datos y los datos obtenidos los guardamos en las variables
while($extraido=mysqli_fetch_array($Consulta)){
	$Nombre = $extraido["0"];
	$Apellido = $extraido["1"];
	$Grado = $extraido["2"];
	$NivelE = $extraido["3"];
  $AnioLectivo = $extraido["4"];
}

while($extraido1=mysqli_fetch_array($ConsultaCal1)){
	$Nota1 = $extraido1["0"];
}

while($extraido2=mysqli_fetch_array($ConsultaCal2)){
	$Nota2 = $extraido2["0"];
}

while($extraido3=mysqli_fetch_array($ConsultaCal3)){
	$Nota3 = $extraido3["0"];
}

while($extraido4=mysqli_fetch_array($ConsultaCal4)){
	$Nota4 = $extraido4["0"];
}

while($extraido5=mysqli_fetch_array($ConsultaCal5)){
	$Nota5 = $extraido5["0"];
}

while($extraido6=mysqli_fetch_array($ConsultaCal6)){
	$Nota6 = $extraido6["0"];
}

while($extraido7=mysqli_fetch_array($ConsultaCal7)){
	$Nota7 = $extraido7["0"];
}

while($extraido8=mysqli_fetch_array($ConsultaCal8)){
	$Nota8 = $extraido8["0"];
}

while($extraido9=mysqli_fetch_array($ConsultaCal9)){
	$Nota9 = $extraido9["0"];
}

while($extraido10=mysqli_fetch_array($ConsultaCal10)){
	$Nota10 = $extraido10["0"];
}

while($extraido11=mysqli_fetch_array($ConsultaCal11)){
	$Nota11 = $extraido11["0"];
}

while($extraido12=mysqli_fetch_array($ConsultaCal12)){
	$Nota12 = $extraido12["0"];
}

while($extraido13=mysqli_fetch_array($ConsultaCal13)){
	$Nota13 = $extraido13["0"];
}

//Nota1
   if ($Nota1>=1 && $Nota1<=2.99)
   {$Cal_Promedio="Bajo";
   }else{
     if($Nota1>=3.00 && $Nota1<=3.89){
       $Cal_Promedio="Basico";
     }
     else{
       if ($Nota1>=3.90 && $Nota1<=4.59){
         $Cal_Promedio="Alto";
       }else {
         if ($Nota1>=4.59 && $Nota1<=5.0){
           $Cal_Promedio="Superior";
         }
         else {
           $Cal_Promedio="Sin Calificacion";
         }
        }
       }
      }

//Nota 2
if ($Nota2>=1 && $Nota2<=2.99)
{$Cal_Promedio2="Bajo";
}else{
  if($Nota2>=3.00 && $Nota2<=3.89){
    $Cal_Promedio2="Basico";
  }
  else{
    if ($Nota2>=3.90 && $Nota2<=4.59){
      $Cal_Promedio2="Alto";
    }else {
      if ($Nota2>=4.59 && $Nota2<=5.0){
        $Cal_Promedio2="Superior";
      }
      else {
        $Cal_Promedio2="Sin Calificacion";
      }
     }
    }
   }

      //Nota3
if ($Nota3>=1 && $Nota3<=2.99)
    {$Cal_Promedio3="Bajo";
  }else{
    if($Nota3>=3.00 && $Nota3<=3.89){
          $Cal_Promedio3="Basico";
      }
        else{
          if ($Nota3>=3.90 && $Nota3<=4.59){
            $Cal_Promedio3="Alto";
          }else {
            if ($Nota3>=4.59 && $Nota3<=5.0){
              $Cal_Promedio3="Superior";
            }
            else {
              $Cal_Promedio3="Sin Calificacion";
            }
           }
          }
         }

        //Nota 4
        if ($Nota4>=1 && $Nota4<=2.99)
        {$Cal_Promedio4="Bajo";
        }else{
          if($Nota4>=3.00 && $Nota4<=3.89){
            $Cal_Promedio4="Basico";
          }
          else{
            if ($Nota4>=3.90 && $Nota4<=4.59){
              $Cal_Promedio4="Alto";
            }else {
              if ($Nota4>=4.59 && $Nota4<=5.0){
                $Cal_Promedio4="Superior";
              }
              else {
                $Cal_Promedio4="Sin Calificacion";
              }
             }
            }
           }

            //Nota5
            if ($Nota5>=1 && $Nota5<=2.99)
            {$Cal_Promedio5="Bajo";
            }else{
              if($Nota5>=3.00 && $Nota5<=3.89){
                $Cal_Promedio5="Basico";
              }
              else{
                if ($Nota5>=3.90 && $Nota5<=4.59){
                  $Cal_Promedio5="Alto";
                }else {
                  if ($Nota5>=4.59 && $Nota5<=5.0){
                    $Cal_Promedio5="Superior";
                  }
                  else {
                    $Cal_Promedio5="Sin Calificacion";
                  }
                 }
                }
               }

                  //Nota6
                  if ($Nota6>=1 && $Nota6<=2.99)
                  {$Cal_Promedio6="Bajo";
                  }else{
                    if($Nota6>=3.00 && $Nota6<=3.89){
                      $Cal_Promedio6="Basico";
                    }
                    else{
                      if ($Nota6>=3.90 && $Nota6<=4.59){
                        $Cal_Promedio6="Alto";
                      }else {
                        if ($Nota6>=4.59 && $Nota6<=5.0){
                          $Cal_Promedio6="Superior";
                        }
                        else {
                          $Cal_Promedio6="Sin Calificacion";
                        }
                       }
                      }
                     }

                     //Nota7
                     if ($Nota7>=1 && $Nota7<=2.99)
                     {$Cal_Promedio7="Bajo";
                     }else{
                       if($Nota7>=3.00 && $Nota7<=3.89){
                         $Cal_Promedio7="Basico";
                       }
                       else{
                         if ($Nota7>=3.90 && $Nota7<=4.59){
                           $Cal_Promedio7="Alto";
                         }else {
                           if ($Nota7>=4.59 && $Nota7<=5.0){
                             $Cal_Promedio7="Superior";
                           }
                           else {
                             $Cal_Promedio7="Sin Calificacion";
                           }
                          }
                         }
                        }

                        //Nota 8
                        if ($Nota8>=1 && $Nota8<=2.99)
                        {$Cal_Promedio8="Bajo";
                        }else{
                          if($Nota8>=3.00 && $Nota8<=3.89){
                            $Cal_Promedio8="Basico";
                          }
                          else{
                            if ($Nota8>=3.90 && $Nota8<=4.59){
                              $Cal_Promedio8="Alto";
                            }else {
                              if ($Nota8>=4.59 && $Nota8<=5.0){
                                $Cal_Promedio8="Superior";
                              }
                              else {
                                $Cal_Promedio8="Sin Calificacion";
                              }
                             }
                            }
                           }

                         //Nota 9
                         if ($Nota9>=1 && $Nota9<=2.99)
                         {$Cal_Promedio9="Bajo";
                         }else{
                           if($Nota9>=3.00 && $Nota9<=3.89){
                             $Cal_Promedio9="Basico";
                           }
                           else{
                             if ($Nota9>=3.90 && $Nota9<=4.59){
                               $Cal_Promedio9="Alto";
                             }else {
                               if ($Nota9>=4.59 && $Nota9<=5.0){
                                 $Cal_Promedio9="Superior";
                               }
                               else {
                                 $Cal_Promedio9="Sin Calificacion";
                               }
                              }
                             }
                            }

                              //Nota 10
                              if ($Nota10>=1 && $Nota10<=2.99)
                              {$Cal_Promedio10="Bajo";
                              }else{
                                if($Nota10>=3.00 && $Nota10<=3.89){
                                  $Cal_Promedio10="Basico";
                                }
                                else{
                                  if ($Nota10>=3.90 && $Nota10<=4.59){
                                    $Cal_Promedio10="Alto";
                                  }else {
                                    if ($Nota10>=4.59 && $Nota10<=5.0){
                                      $Cal_Promedio10="Superior";
                                    }
                                    else {
                                      $Cal_Promedio10="Sin Calificacion";
                                    }
                                   }
                                  }
                                 }

                                 //Nota 11
                                 if ($Nota11>=1 && $Nota11<=2.99)
                                 {$Cal_Promedio11="Bajo";
                                 }else{
                                   if($Nota11>=3.00 && $Nota11<=3.89){
                                     $Cal_Promedio11="Basico";
                                   }
                                   else{
                                     if ($Nota11>=3.90 && $Nota11<=4.59){
                                       $Cal_Promedio11="Alto";
                                     }else {
                                       if ($Nota11>=4.59 && $Nota11<=5.0){
                                         $Cal_Promedio11="Superior";
                                       }
                                       else {
                                         $Cal_Promedio11="Sin Calificacion";
                                       }
                                      }
                                     }
                                    }

//Nota 12
if ($Nota12>=1 && $Nota12<=2.99)
{$Cal_Promedio12="Bajo";
}else{
  if($Nota12>=3.00 && $Nota12<=3.89){
    $Cal_Promedio12="Basico";
  }
  else{
    if ($Nota12>=3.90 && $Nota12<=4.59){
      $Cal_Promedio12="Alto";
    }else {
      if ($Nota12>=4.59 && $Nota12<=5.0){
        $Cal_Promedio12="Superior";
      }
      else {
        $Cal_Promedio12="Sin Calificacion";
      }
     }
    }
   }

//Nota 13
if ($Nota13>=1 && $Nota13<=2.99)
{$Cal_Promedio13="Bajo";
}else{
  if($Nota13>=3.00 && $Nota13<=3.89){
    $Cal_Promedio13="Basico";
  }
  else{
    if ($Nota13>=3.90 && $Nota13<=4.59){
      $Cal_Promedio13="Alto";
    }else {
      if ($Nota13>=4.59 && $Nota13<=5.0){
        $Cal_Promedio13="Superior";
      }
      else {
        $Cal_Promedio13="Sin Calificacion";
      }
     }
    }
   }

//Intensidad Horarias
if ($Grado=="6A" or $Grado=="6B" or $Grado=="6C"){
  $Ih1 = "4";
  $Ih2 = "2";
  $Ih3 = "4";
  $Ih4 = "2";
  $Ih5 = "3";
  $Ih6 = "2";
  $Ih7 = "2";
  $Ih8 = "1";
  $Ih9 = "2";
  $Ih10 = "1";
  $Ih11 = "2";
  $Ih12 = "2";
  $Ih13 = "1";
}

//Intensidad Horarias
if ($Grado=="7A" or $Grado=="7B" or $Grado=="7C"){
  $Ih1 = "1";
  $Ih2 = "2";
  $Ih3 = "2";
  $Ih4 = "1";
  $Ih5 = "2";
  $Ih6 = "1";
  $Ih7 = "2";
  $Ih8 = "2";
  $Ih9 = "3";
  $Ih10 = "2";
  $Ih11 = "4";
  $Ih12 = "2";
  $Ih13 = "4";
}

//Intensidad Horarias
if ($Grado=="8A" or $Grado=="8B" or $Grado=="8C"){
  $Ih1 = "4";
  $Ih2 = "1";
  $Ih3 = "2";
  $Ih4 = "2";
  $Ih5 = "2";
  $Ih6 = "4";
  $Ih7 = "2";
  $Ih8 = "2";
  $Ih9 = "3";
  $Ih10 = "1";
  $Ih11 = "1";
  $Ih12 = "3";
  $Ih13 = "2";
}

//Intensidad Horarias
if ($Grado=="9A" or $Grado=="9B" or $Grado=="9C"){
  $Ih1 = "1";
  $Ih2 = "2";
  $Ih3 = "2";
  $Ih4 = "2";
  $Ih5 = "2";
  $Ih6 = "4";
  $Ih7 = "4";
  $Ih8 = "2";
  $Ih9 = "2";
  $Ih10 = "3";
  $Ih11 = "1";
  $Ih12 = "3";
  $Ih13 = "1";
}

//Intensidad Horarias
if ($Grado=="10A" or $Grado=="10B" or $Grado=="10C"){
  $Ih1 = "2";
  $Ih2 = "1";
  $Ih3 = "4";
  $Ih4 = "2";
  $Ih5 = "1";
  $Ih6 = "2";
  $Ih7 = "3";
  $Ih8 = "4";
  $Ih9 = "3";
  $Ih10 = "2";
  $Ih11 = "1";
  $Ih12 = "2";
  $Ih13 = "3";
}

//Intensidad Horarias
if ($Grado=="11A" or $Grado=="11B" or $Grado=="11C"){
  $Ih1 = "4";
  $Ih2 = "2";
  $Ih3 = "4";
  $Ih4 = "1";
  $Ih5 = "2";
  $Ih6 = "3";
  $Ih7 = "2";
  $Ih8 = "2";
  $Ih9 = "1";
  $Ih10 = "2";
  $Ih11 = "2";
  $Ih12 = "1";
  $Ih13 = "2";
}

// --- Asignamos valores a la plantilla
$templateWord->setValue('Est_Nombre',$Nombre);
$templateWord->setValue('Est_Apellidos',$Apellido);
$templateWord->setValue('G_Id',$Grado);
$templateWord->setValue('NivelE_Nombre',$NivelE);
$templateWord->setValue('Est_AnoLectivo',$AnioLectivo);
$templateWord->setValue('Cal_Promedio',$Cal_Promedio);
$templateWord->setValue('Cal_Promedio2',$Cal_Promedio2);
$templateWord->setValue('Cal_Promedio3',$Cal_Promedio3);
$templateWord->setValue('Cal_Promedio4',$Cal_Promedio4);
$templateWord->setValue('Cal_Promedio5',$Cal_Promedio5);
$templateWord->setValue('Cal_Promedio6',$Cal_Promedio6);
$templateWord->setValue('Cal_Promedio7',$Cal_Promedio7);
$templateWord->setValue('Cal_Promedio8',$Cal_Promedio8);
$templateWord->setValue('Cal_Promedio9',$Cal_Promedio9);
$templateWord->setValue('Cal_Promedio10',$Cal_Promedio10);
$templateWord->setValue('Cal_Promedio11',$Cal_Promedio11);
$templateWord->setValue('Cal_Promedio12',$Cal_Promedio12);
$templateWord->setValue('Cal_Promedio13',$Cal_Promedio13);
$templateWord->setValue('Ih_1',$Ih1);
$templateWord->setValue('Ih_2',$Ih2);
$templateWord->setValue('Ih_3',$Ih3);
$templateWord->setValue('Ih_4',$Ih4);
$templateWord->setValue('Ih_5',$Ih5);
$templateWord->setValue('Ih_6',$Ih6);
$templateWord->setValue('Ih_7',$Ih7);
$templateWord->setValue('Ih_8',$Ih8);
$templateWord->setValue('Ih_9',$Ih9);
$templateWord->setValue('Ih_10',$Ih10);
$templateWord->setValue('Ih_11',$Ih11);
$templateWord->setValue('Ih_12',$Ih12);
$templateWord->setValue('Ih_13',$Ih13);
$templateWord->setValue('Fecha',$FechaTotal);


// --- Guardamos el documento
$templateWord->saveAs('Certificado.docx');

// -- Contiene todo el cabezado para imprimir del documento
header("Content-Disposition: attachment; filename=Certificado.docx; charset=iso-8859-1");
echo file_get_contents('Certificado.docx');

?>
