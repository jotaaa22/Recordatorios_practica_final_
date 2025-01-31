<!doctype html>
<html lang="en">
    <head>
        <title>Recordatorios</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>

    </head>
    <body>
        <div class="contenedor">

        <div class="col-md-8 offset-md-2">

            <div id='calendar'></div>
        </div>

        <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header bg-info">
                <h5 class="modal-title" id="titulo"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <form id = "formulario">
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombreEvento">
                                <label for="nombreEvento" class="form-label">Nombre del evento</label>
                            </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="inicio">
                            <label for="inicio" class="form-label">Fecha de inicio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="final">
                            <label for="final" class="form-label">Fecha de finalización</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="color" class="form-control" id="color">
                            <label for="color" class="form-label">Color</label>
                        </div>
                    <div class="modal-footer">
                    
                    </div>
              </form>
               
            </div>
          </div>
        </div>
        

        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <!-- JavaScript -->
        <script src="../static/script/calendar.js"></script>
    </body>
</html>
