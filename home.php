<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet" href="./styles/calendar.css">
</head>
<body>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1>barbearia</h1>
        </div>
      </nav>

    <div class="col-md-6 p-4">
        <div class="container">

            <h1>Escolha o serviço desejado.</h1>

            <div class="services">

                <div class="btn-group btn-services" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-primary btn-hair" for="btncheck1" style="border-radius: 5px;">Cabelo</label>
                
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-primary btn-beard" for="btncheck2" style="border-radius: 5px;">Barba</label>
                
                </div>

            </div>
            <hr>
            <div class="form-group container-hours">
                <h1>Escolha o horário desejado.</h1>
                <select class="form-control" id="selectedTime" name="horas_disponiveis">
                    <option value="09:00">09:00</option>
                    <option value="09:00">09:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:00">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:00">11:30</option>
                    <option value="11:00">13:00</option>
                    <option value="11:00">13:30</option>
                    <option value="11:00">14:00</option>
                    <option value="11:00">14:30</option>
                    <option value="11:00">15:00</option>
                    <option value="11:00">15:30</option>
                    <option value="11:00">16:00</option>
                    <option value="11:00">16:30</option>
                    <option value="11:00">17:00</option>
                    <option value="11:00">17:30</option>
                    <option value="11:00">18:00</option>
                    <option value="11:00">18:30</option>
                </select>
            </div>

            <hr>
            <h1>Escolha a data desejada.</h1>
            <!--INÍCIO-CALENDÁRIO -->
            <div class="calendarBody">
                <div class="month-indicator">
                  <button class="btn-previous" onclick="previousMonth()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                  <span class="currentMonth"></span>  <span class="currentYaer"></span>
                  <button class="btn-next" onclick="nextMonth()"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </div>
                <div class="weekdays">
                  <ul>
                    <li>D</li>
                    <li>S</li>
                    <li>T</li>
                    <li>Q</li>
                    <li>Q</li>
                    <li>S</li>
                    <li>S</li>
                  </ul>
                </div>
                <div class="date">
                  <ul>
                    
                  </ul>
                </div>
          
              </div>
              <center>
              <section class="popupAddEvent">
                <div>
                  <h2></h2>
                  <p></p>
                </div>
          
                <div class="row">
          
                </div>
                <div class="btnAddEvent schedulingButton" onclick="(scheduling())">
                  <p>Agendar</p>
                </div>      
              </section>
              </center>
            </div>
            <!--Fim-CALENDÁRIO -->
            
    </div>

    <footer class="footer bg-dark text-light text-center">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                <p>&copy; <?php echo date('Y'); ?> Josué Victor. All rights reserved.</p>

              </div>
              <div class="col-md-6">
                  <ul class="list-inline">
                      <li class="list-inline-item"><a href="#">Home</a></li>
                      <li class="list-inline-item"><a href="#">Servicos</a></li>
                      <li class="list-inline-item"><a href="https://www.linkedin.com/in/victor-arroxellas/" target="_blank">Contato</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
  
   
    <!-- Include necessary scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybF75MGu7B0dJ2GS0PB4q2OQw1TJpk1WcxYZ1HZihBYBM3S6p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-Zk+RlC/KzFxdzNBpdr8rRpR+f0zOYxOVsG3IM72m4G5pC6S/D5pWK7qi3AvC9wE5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/calendar.js"></script>
    <script src="./js/calendarActions.js"></script>
    <script>
      function scheduling() {
        Swal.fire({
            title: "Agendamento realizado",
            icon: "success"
          });
        }
    </script>
    

</body>
</html>
