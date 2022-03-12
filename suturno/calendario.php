<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- BootStrap Icons -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <title>Calendario</title>
  </head>
  <body>
      




    <div class="container">

        <div class="container-calendario">
            
        <br><br>

        <div class="row">
            
            <div class="col-3"> Nombre</div>
            <div class="col-3"> Cedula</div>
            <div class="col-3"> Tipo de contrato</div>
            <div class="col-3"> Fecha</div>
            <br><br><br>
        </div>
           


        <div class="row" >

            <div class="col" >
                <div class="row" style="text-align: center;" ><h5>1</h5> </div>
                <div class="row">
                    <div class="contenedor-modal-asignacion">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Asignar</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">


                                            <div class="col-md-10" > <h4>Día 6:00am - 12:00pm</h4>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1"> Turno día ordinario '(6)'Horas</label>
                                                    <p>Al seleccionar una opcion, deben aparecer dos  textbox para asignar '[FechInicio],[fechFin]</p>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">Turno día dominical '(6)' Horas</label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                                    <label class="form-check-label" for="exampleRadios3">Turno día festivo '(6)' Horas</label>
                                                </div>

                                            </div>

                                            <div class="col-md-10" > <h4>Tarde 12:00pm - 9:00pm</h4>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1"> Default radio</label>
                                                    <p>Los turnos en horario tarde son iguales a horario mañana, pero necesitamos estas opciones para generar reportes</p>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">Second default radio</label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                                    <label class="form-check-label" for="exampleRadios3">Disabled radio</label>
                                                </div>

                                            </div>

                                            <div class="col-md-10" > <h4>Noche 9:00pm 6:00am</h4>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1"> Default radio</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">Second default radio</label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                                    <label class="form-check-label" for="exampleRadios3">Disabled radio</label>
                                                </div>

                                            </div>
                                           
                                       

                                        

                                       


                                            
                                                                          
                                        



                                        </div>                                        
                                        <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="col">2</div>
            <div class="col">3</div>
            <div class="col">4</div>
            <div class="col">5</div>
            <div class="col">6</div>
            <div class="col">7</div>
       </div>

       

       

        
        
        
        

        
        </div>
        
    </div>

    <style>

        body{
            background-color: white;
            }
       
        .col
        {background-color:#D9DDDC;
            text-align: center;
            border-radius: 20%;
            border-style: solid;
            border-color: black;
            border-width: 0.5px;
            }
        .container-info{
            background-color: aliceblue;
            border-radius: 15%;
            
        }
        
        .col-md-10
        {
            background-color: #FFF1B5;
            margin-left: 40px;
            border-radius: 15%;

        }
        h4{text-align: center;}
        
        

        
        
        
    </style> 




   









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>

 
                                        