<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="img/logotipo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<body>
    <header class="bg-white py-3 shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">Patitas al Rescate</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link inicio" href="index.php">Patitas al Rescate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/consejos.html">Consejos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/preguntas.html">Preguntas Frecuentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/nosotros.html">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view/contacto.html">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="slider-box">
            <div id="slider">
                <div class="slide">
                    <img src="img/img.perrospq/Papillon.jpeg" alt="Imagen 1">
                </div>
                <div class="slide">
                    <img src="img/img.perrosmedianos/Alaskan Malamute.webp" alt="Imagen 2">
                </div>
                <div class="slide">
                    <img src="img/img.perrosgrandes/Cane_Corso.png" alt="Imagen 3">
                </div>
                <div class="slide">
                    <img src="img/img.perrospq/Havanese.webp" alt="Imagen 4">
                </div>
            </div>
        </div>

        <section id="services" class="py-5">
            <div class="container">
                    <h2 class="text-center mb-4">El Mejor Cuidado para tus Mascotas</h2>
                    <Center><h4>Nos importa la salud y felicidad de tus amigos peludos.</h4></Center>
                    
                <h2 class="text-center mb-4">Nuestros Servicios</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-box text-center">
                            <i class="bi bi-house-door" style="font-size: 2rem;"></i>
                            <h4>Cuidados Diarios</h4>
                            <p>Atención y cuidados diarios para mantener a tus mascotas felices y saludables.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box text-center">
                            <i class="bi bi-capsule" style="font-size: 2rem;"></i>
                            <h4>Atención Médica</h4>
                            <p>Servicios médicos especializados para el bienestar integral de tus mascotas.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box text-center">
                            <i class="bi bi-egg-fried" style="font-size: 2rem;"></i>                            
                            <h4>Alimentación personalizada</h4>
                            <p>Te guiamos en la elección de la mejor dieta para tu perro, adaptada a sus necesidades.</p>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>

        <section id="team" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Nuestro Equipo</h2>
        
                <div class="row">
                    <div class="col-md-4">
                            <div class="team-member text-center">
                                <img src="img/fotos_clientes/hombre 1.jpg" alt="Miembro del Equipo 1">
                                <h4>Esteban Figueroa</h4>
                                <p>"Hago esto para que las personas tengan más conocimiento sobre el cuidado de las mascotas"</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                            <div class="team-member text-center">
                                <img src="img/fotos_clientes/mujer 1.jpg" alt="Miembro del Equipo 2">
                                <h4>Sharon Restrepo</h4>
                                <p>"Hago esto para que las personas tengan más conocimiento sobre el cuidado de las mascotas"</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                            <div class="team-member text-center">
                                <img src="img/fotos_clientes/hombre 2.jpg" alt="Miembro del Equipo 3">
                                <h4>Carlos Nanclares</h4>
                                <p>"Hago esto para que las personas tengan más conocimiento sobre el cuidado de las mascotas"</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        

        <section id="additional-services" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Servicios Adicionales</h2>
                <div class="row">
                    <div class="col-md-6">
                        <a href="view/preguntas.html" class="service-link">
                            <div class="additional-service-box text-center">
                                <h4>Preguntas Frecuentes</h4>
                                <p>Aquí podrás hallar las preguntas que más se realizan los dueños de los canes al ser primerizos.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="view/carrito.html" class="service-link">
                            <div class="additional-service-box text-center">
                                <h4>Tienda Virtual</h4>
                                <p>En esta tienda podrás encontrar gran variedad de productos para canes y su entretenimiento.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <main class="container my-5">
            <h2 class="text-center mb-4">Respuestas a preguntas comunes.</h2>
            
            <div class="accordion mb-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ¿Cómo debo alimentar a mi perro?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            La alimentación de tu perro depende de su edad, tamaño y nivel de actividad. Consulta con tu veterinario para elegir el mejor alimento y cantidad para tu mascota. Generalmente, los perros adultos deben ser alimentados dos veces al día con raciones equilibradas y adecuadas para su tamaño.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Con qué frecuencia debo bañar a mi perro?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            La frecuencia del baño varía según el tipo de pelaje y estilo de vida de tu perro. Generalmente, un baño cada 4-6 semanas es adecuado para la mayoría de los perros. Sin embargo, algunos perros con piel sensible o que pasan mucho tiempo al aire libre pueden necesitar baños más frecuentes.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Cómo puedo prevenir las pulgas y garrapatas?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Utiliza productos recomendados por tu veterinario para prevenir pulgas y garrapatas. Estos pueden incluir collares antipulgas, tratamientos tópicos o pastillas. Además, revisa regularmente a tu perro para detectar cualquier signo de infestación.
                        </div>
                    </div>
                </div>

        <section <div id="gallery" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Galería de Imágenes</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/img.perrospq/Shih_Tzu.webp" alt="Galería 1" class="img-fluid" onclick="openModal(this);">
                    </div>
                    <div class="col-md-4">
                        <img src="img/img.perrosmedianos/Border Collie.jpg" alt="Galería 2" class="img-fluid" onclick="openModal(this);">
                    </div>
                    <div class="col-md-4">
                        <img src="img/img.perrosgrandes/Rottweiler.jpg" alt="Galería 3" class="img-fluid" onclick="openModal(this);">
                    </div>
                    <div class="col-md-4">
                        <img src="img/img.perrospq/Pomerania.webp" alt="Galería 4" class="img-fluid" onclick="openModal(this);">
                    </div>
                    <div class="col-md-4">
                        <img src="img/img.perrosmedianos/Shiba Inu.jpg" alt="Galería 5" class="img-fluid" onclick="openModal(this);">
                    </div>
                    <div class="col-md-4">
                        <img src="img/img.perrosgrandes/San_Bernardo.webp" alt="Galería 6" class="img-fluid" onclick="openModal(this);">
                    </div>
                </div>
            </div>
        </div>
        
        <div id="imageModal" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img id="modalImage" src="" class="img-fluid">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <script>
            function openModal(img) {
                var modalImage = document.getElementById("modalImage");
                modalImage.src = img.src; 
                var modal = new bootstrap.Modal(document.getElementById('imageModal'));
                modal.show();
            }
            </script>
                    
            </div>
        </section>
        <link rel="stylesheet" href="css/eventos.css">
</head>
<body>

    
    <section class="calendar-and-reminders container mt-5">
        
        <div class="calendar-section">
            <h1>Calendario de Eventos y Talleres</h1>
            <div id='calendar'></div>
        </div>

        
        <section class="reminders-alerts-section" id="remindersSection">
            <h2>Recordatorios y Alertas</h2>
            <ul id="reminders-alerts-list">
                
            </ul>
        </section>
    </section>

    
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Detalles del Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form id="eventForm" action="crear_evento.php" method="POST">
                        <div class="mb-3">
                            <label for="eventTitle" class="form-label">Título del Evento</label>
                            <input type="text" class="form-control" id="eventTitle" name="titulo" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventStart" class="form-label">Fecha y Hora de Inicio</label>
                            <input type="datetime-local" class="form-control" id="eventStart" name="fecha_hora" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventDescription" class="form-label">Descripción</label>
                            <textarea class="form-control" id="eventDescription" name="descripcion" rows="3" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" id="deleteEventButton" class="btn btn-danger">Eliminar Evento</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/locales/es.global.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var remindersSection = document.getElementById('remindersSection'); 
            var remindersList = document.getElementById('reminders-alerts-list'); 
            var selectedDate;

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                editable: true,
                selectable: true,
                locale: 'es',  
                contentHeight: 'auto',  
                events: [],
                dateClick: function(info) {
                    selectedDate = info.dateStr; 
                    document.getElementById('eventStart').value = selectedDate;
                    var modal = new bootstrap.Modal(document.getElementById('eventModal'));
                    modal.show();
                },
                eventClick: function(info) {
                    var eventObj = info.event;
                    document.getElementById('eventTitle').value = eventObj.title;
                    document.getElementById('eventStart').value = eventObj.start.toISOString().slice(0, -1);
                    document.getElementById('eventDescription').value = eventObj.extendedProps.description;

                    document.getElementById('deleteEventButton').onclick = function() {
                        eventObj.remove();
                        updateReminders();
                        modal.hide();
                    };

                    var modal = new bootstrap.Modal(document.getElementById('eventModal'));
                    modal.show();
                }
            });

            calendar.render();

            var eventForm = document.getElementById('eventForm');
            eventForm.addEventListener('submit', function (e) {
                e.preventDefault();
                var eventTitle = document.getElementById('eventTitle').value;
                var eventStart = document.getElementById('eventStart').value;
                var eventDescription = document.getElementById('eventDescription').value;

                calendar.addEvent({
                    title: eventTitle,
                    start: eventStart,
                    description: eventDescription
                });

                updateReminders();  

                var modal = bootstrap.Modal.getInstance(document.getElementById('eventModal'));
                modal.hide();
                eventForm.reset();
            });

            function updateReminders() {
                remindersList.innerHTML = ''; 

                var events = calendar.getEvents();
                if (events.length > 0) {
                    remindersSection.classList.add('expanded'); 
                } else {
                    remindersSection.classList.remove('expanded'); 
                }

                events.forEach(function(event) {
                    var reminderItem = document.createElement('li');
                    reminderItem.textContent = event.title + ' - ' + event.start.toLocaleDateString();
                    remindersList.appendChild(reminderItem);
                });
            }
        });
    </script>

    </main>

    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">cra 28 d # 108 da 18</a></li>
                        <li><a href="#">3002652632</a></li>
                        <li><a href="#">Email: Patitasalrescate@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Servicios</h5>
                    <ul class="list-unstyled">
                        <li><a href="view/consejos.html">Consejos</a></li>
                        <li><a href="view/carrito.html">Tienda virtual</a></li>
                        <li><a href="view/eventos.html">Calendario de eventos</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociales</h5>
                    <div class="social-links">
                        <a href="#" class="bi bi-facebook"></a>
                        <a href="https://x.com/patitas_al_resc" class="bi bi-twitter"></a>
                        <a href="#" class="bi bi-instagram"></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <p>&copy; 2024 Patitas al Rescate. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-bg2XTQX8kH0nF6Vyk0z4VGMdU3SpdO3/8tzZ1VypQb6F5TY4w6TkrAb6r7F1MZg" crossorigin="anonymous"></script>
    <script>
        
        const slider = document.getElementById('slider');
        let index = 0;

        function showSlide(slideIndex) {
            const slides = slider.getElementsByClassName('slide');
            if (slideIndex >= slides.length) {
                index = 0;
            } else if (slideIndex < 0) {
                index = slides.length - 1;
            } else {
                index = slideIndex;
            }
            slider.style.transform = `translateX(${-index * 100}%)`;
        }

        setInterval(() => {
            showSlide(index + 1);
        }, 3000); 
    </script>
</body>
</html>
