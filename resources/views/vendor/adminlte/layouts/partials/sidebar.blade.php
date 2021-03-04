<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../1.jpg" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar"/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->

              <!--<li class="treeview">
            <a href="#"><i class="fa fa-list"></i> <span>{{ trans('Roles') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">-->
                        
                        @can('users.index')
                         <li class="active"><a href="{{ route('users.index') }}"><i class='fa  fa-users'></i> <span> Usuarios</span></a></li>

                        @endcan
                        @can('roles.index')
                         <li class="active"><a href="{{ route('roles.index') }}"><i class='fa  fa-users'></i> <span>Roles</span></a></li>
                        @endcan

                     
                    </ul>
    </li>

          <!--<li class="treeview">
            <a href="#"><i class="fa fa-list"></i> <span>{{ trans('ACESSOS') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu"> -->
            <!-- Optionally, you can add icons to the links -->

            <!--
            <li class="active"><a href="{{ url('usuario') }}"><i class='fa  fa-users'></i> <span>Usuarios</span></a></li>
             <li class="active"><a href="{{ url('perfil') }}"><i class='fa  fa-users'></i> <span>Perfiles</span></a></li>
              <li class="active"><a href="{{ url('permisos') }}"><i class='fa  fa-users'></i> <span>Permiso</span></a></li>   
              <li class="active"><a href="{{ url('perfil-permisos') }}"><i class='fa  fa-users'></i> <span>Permisos Perfiles</span></a></li>  -->   
          
         
            
        </ul>
    </li>


        <li class="treeview">
            <a href="#"><i class="fa fa-list"></i> <span>{{ trans('CATALOGOS') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
            <!-- Optionally, you can add icons to the links -->
               @can('paquete.index')
                         <li class="active"><a href="{{ route('paquete.index') }}"><i class='fa  fa-users'></i> <span> paquete</span></a></li>

                @endcan
           
             @can('empleado.index')
                         <li class="active"><a href="{{ route('empleado.index') }}"><i class='fa  fa-users'></i> <span> Empleado</span></a></li>

                @endcan

             @can('paciente.index')
                         <li class="active"><a href="{{ route('paciente.index') }}"><i class='fa  fa-users'></i> <span> Paciente</span></a></li>

                @endcan

               @can('servicio.index')
                         <li class="active"><a href="{{ route('servicio.index') }}"><i class='fa  fa-users'></i> <span> Servicio</span></a></li>

                @endcan

                 @can('doctor.index')
                         <li class="active"><a href="{{ route('doctor.index') }}"><i class='fa  fa-users'></i> <span> Doctor</span></a></li>

                @endcan

                    @can('especialidad.index')
                         <li class="active"><a href="{{ route('especialidad.index') }}"><i class='fa  fa-users'></i> <span> Especialidad</span></a></li>

                @endcan
         
                

                    @can('area.index')
                         <li class="active"><a href="{{ route('area.index') }}"><i class='fa  fa-users'></i> <span> Area</span></a></li>

                @endcan


                    @can('estatus.index')
                         <li class="active"><a href="{{ route('estatus.index') }}"><i class='fa  fa-users'></i> <span> Estatus</span></a></li>

                @endcan

           
                    @can('hospital.index')
                         <li class="active"><a href="{{ route('hospital.index') }}"><i class='fa  fa-users'></i> <span> Hospital</span></a></li>

                @endcan

            @can('piso.index')
                         <li class="active"><a href="{{ route('piso.index') }}"><i class='fa  fa-users'></i> <span> Piso</span></a></li>

                @endcan

                  @can('cuarto.index')
                         <li class="active"><a href="{{ route('cuarto.index') }}"><i class='fa  fa-users'></i> <span> Cuarto</span></a></li>

                @endcan

                @can('pabellon.index')
                         <li class="active"><a href="{{ route('pabellon.index') }}"><i class='fa  fa-users'></i> <span> Pabellon</span></a></li>

                @endcan

            
         </ul>
         </li> 
            

     <li class="treeview">
            <a href="#"><i class="fa fa-list"></i> <span>{{ trans('REPORTE') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">


           
                @can('grafica')
                         <li class="active"><a href="{{ route('grafica') }}"><i class='fa  fa-users'></i> <span> Grafica Cuartos</span></a></li>

                @endcan


                @can('asignacioncuarto')
                    <li class="active"><a href="{{ route('asignacioncuarto') }}"><i class='fa  fa-users'></i> <span> Asignacion de cuarto</span></a></li>

                @endcan


                    @can('horarioronda')
                         <li class="active"><a href="{{ route('horarioronda') }}"><i class='fa  fa-users'></i> <span>Historial</span></a></li>

                @endcan

                  @can('graficaPaciente')
             <li class="active"><a href="{{ route('graficaPaciente') }}"><i class='fa  fa-users'></i> <span> grafica paciente</span></a></li>
                @endcan

                @can('graficaEspecialidad')
             <li class="active"><a href="{{ route('graficaEspecialidad') }}"><i class='fa  fa-users'></i> <span> grafica Especialidad</span></a></li>
                @endcan

                @can('generopaciente')
             <li class="active"><a href="{{ route('generoPaciente') }}"><i class='fa  fa-users'></i> <span> genero Paciente</span></a></li>
                @endcan
                  
             @can('Suscripcion')
                         <li class="active"><a href="{{ route('Suscripcion') }}"><i class='fa  fa-users'></i> <span>Suscripciones</span></a></li>

                @endcan

                @can('graficaPabellon')
                         <li class="active"><a href="{{ url('graficaPabellon') }}"><i class='fa fa-pie-chart'></i> <span>Grafica Pabellones</span></a></li>
                  @endcan

            
    
       </ul>
    </li>
            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
