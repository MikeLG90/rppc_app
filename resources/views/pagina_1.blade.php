<x-base-layout :scrollspy="false">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  Aqui es donde se requieres poner los estilos  -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <div class="row layout-top-spacing">

        <!-- CONTENT HERE -->

    <h2>Posibles enfermedades</h2>
    <div id="map" style="width: 650%; height: 500px;"></div>


    </div>
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        
     <script>
        // Inicializar el mapa centrado en Chetumal
        var map = L.map('map').setView([18.50012, -88.29614], 13);

        // Cargar y mostrar los mosaicos del mapa de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Datos de ejemplo con coordenadas y valores de cobertura
        var locations = [
            { lat: 18.50223, lng: -88.29817, coverage: 80 },
            { lat: 18.49876, lng: -88.29368, coverage: 50 },
            { lat: 18.50419, lng: -88.29045, coverage: 30 },
            { lat: 18.50167, lng: -88.30230, coverage: 70 },
            { lat: 18.49585, lng: -88.29502, coverage: 90 }
        ];

        // Función para determinar el color del círculo basado en la cobertura
        function getColor(coverage) {
            return coverage > 75 ? 'red' :
                   coverage > 50 ? 'yellow' :
                   'green';
        }

        // Agregar círculos al mapa
        locations.forEach(function(location) {
            L.circle([location.lat, location.lng], {
                color: getColor(location.coverage),
                fillColor: getColor(location.coverage),
                fillOpacity: 0.5,
                radius: location.coverage * 10 // Ajustar el radio según la cobertura
            }).addTo(map)
              .bindPopup('Cobertura: ' + location.coverage + '%');
        });

     </script>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>