<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        @vite(['resources/scss/light/assets/components/timeline.scss'])
        <!--  END CUSTOM STYLE FILE  -->
        
        <style>
            .toggle-code-snippet { margin-bottom: 0px; }
            body.dark .toggle-code-snippet { margin-bottom: 0px; }
        </style>
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <x-slot:scrollspyConfig>
        data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
    </x-slot>
    
    <!-- BREADCRUMB -->
    <!-- /BREADCRUMB -->

    <div class="row layout-top-spacing">
        <h3>Generador de folios</h3>
    </div>
    
    <div class="row">

        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">                                
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Porfavor rellene todos los campos correspondientes</h4>
                        </div>                                                                        
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form>
                        <div class="row mb-3">
                          <label for="inputEmail2" class="col-sm-2 col-form-label">Generado por:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail2">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputPassword2" class="col-sm-2 col-form-label">Fecha y hora:</label>
                          <div class="col-sm-10">
                            <input type="datetime-local" class="form-control" id="inputPassword2">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputEmail2" class="col-sm-2 col-form-label">Para:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail2">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputEmail2" class="col-sm-2 col-form-label">Oficina o Delegación:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail2">
                          </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
<!-- Default -->
<button class="btn btn-primary mb-4" type="button">Generar</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

 
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>

    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>