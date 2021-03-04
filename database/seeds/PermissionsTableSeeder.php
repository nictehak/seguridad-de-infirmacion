<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);

          Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'users.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
    
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Podría eliminar cualquier usuario del sistema',      
        ]);

        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

        //paquete

        Permission::create([
            'name'          => 'Navegar paquete',
            'slug'          => 'paquete.index',
            'description'   => 'Lista y navega todos los paquetes del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un paquete',
            'slug'          => 'paquete.show',
            'description'   => 'Ve en detalle cada paquete del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de paquetes',
            'slug'          => 'paquete.create',
            'description'   => 'Podría crear nuevos paquetes en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de paquete',
            'slug'          => 'paquete.edit',
            'description'   => 'Podría editar cualquier dato de un paquete del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar paquete',
            'slug'          => 'paquete.destroy',
            'description'   => 'Podría eliminar cualquier paquete del sistema',      
        ]);

        //empleado

        Permission::create([
            'name'          => 'Navegar empleado',
            'slug'          => 'empleado.index',
            'description'   => 'Lista y navega todos los empleados del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un empleado',
            'slug'          => 'empleado.show',
            'description'   => 'Ve en detalle cada empleado del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de empleados',
            'slug'          => 'empleado.create',
            'description'   => 'Podría crear nuevos empleados en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de empleado',
            'slug'          => 'empleado.edit',
            'description'   => 'Podría editar cualquier dato de un empleado del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar empleado',
            'slug'          => 'empleado.destroy',
            'description'   => 'Podría eliminar cualquier empleado del sistema',      
        ]);

        //paciente

        Permission::create([
            'name'          => 'Navegar paciente',
            'slug'          => 'paciente.index',
            'description'   => 'Lista y navega todos los pacientes del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un paciente',
            'slug'          => 'paciente.show',
            'description'   => 'Ve en detalle cada paciente del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de pacientes',
            'slug'          => 'paciente.create',
            'description'   => 'Podría crear nuevos pacientes en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de paciente',
            'slug'          => 'paciente.edit',
            'description'   => 'Podría editar cualquier dato de un paciente del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar paciente',
            'slug'          => 'paciente.destroy',
            'description'   => 'Podría eliminar cualquier paciente del sistema',      
        ]);


        //servicio

        Permission::create([
            'name'          => 'Navegar servicio',
            'slug'          => 'servicio.index',
            'description'   => 'Lista y navega todos los servicios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un servicio',
            'slug'          => 'servicio.show',
            'description'   => 'Ve en detalle cada servicio del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de servicios',
            'slug'          => 'servicio.create',
            'description'   => 'Podría crear nuevos servicios en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de servicio',
            'slug'          => 'servicio.edit',
            'description'   => 'Podría editar cualquier dato de un servicio del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar servicio',
            'slug'          => 'servicio.destroy',
            'description'   => 'Podría eliminar cualquier servicio del sistema',      
        ]);


        //doctor

        Permission::create([
            'name'          => 'Navegar doctor',
            'slug'          => 'doctor.index',
            'description'   => 'Lista y navega todos los doctores del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un doctor',
            'slug'          => 'doctor.show',
            'description'   => 'Ve en detalle cada doctor del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de doctores',
            'slug'          => 'doctor.create',
            'description'   => 'Podría crear nuevos doctores en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de doctor',
            'slug'          => 'doctor.edit',
            'description'   => 'Podría editar cualquier dato de un doctor del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar doctor',
            'slug'          => 'doctor.destroy',
            'description'   => 'Podría eliminar cualquier doctor del sistema',      
        ]);


        //especialidad

        Permission::create([
            'name'          => 'Navegar especialidad',
            'slug'          => 'especialidad.index',
            'description'   => 'Lista y navega todos las especialidades del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de una especialidad',
            'slug'          => 'especialidad.show',
            'description'   => 'Ve en detalle cada especialidad del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de especialidad',
            'slug'          => 'especialidad.create',
            'description'   => 'Podría crear nuevas especialidades en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de especialidades',
            'slug'          => 'especialidad.edit',
            'description'   => 'Podría editar cualquier dato de una especialidad del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar especialidad',
            'slug'          => 'especialidad.destroy',
            'description'   => 'Podría eliminar cualquier especialidad del sistema',      
        ]);

              //area

        Permission::create([
            'name'          => 'Navegar area',
            'slug'          => 'area.index',
            'description'   => 'Lista y navega todos las areas del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un area',
            'slug'          => 'area.show',
            'description'   => 'Ve en detalle cada area del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de una area',
            'slug'          => 'area.create',
            'description'   => 'Podría crear nuevas areas en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de areas',
            'slug'          => 'area.edit',
            'description'   => 'Podría editar cualquier dato de una area del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar area',
            'slug'          => 'area.destroy',
            'description'   => 'Podría eliminar cualquier area del sistema',      
        ]);



              //estatus

        Permission::create([
            'name'          => 'Navegar estatus',
            'slug'          => 'estatus.index',
            'description'   => 'Lista y navega todos los estatus del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un estatus',
            'slug'          => 'estatus.show',
            'description'   => 'Ve en detalle cada estatus del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de un estatus',
            'slug'          => 'estatus.create',
            'description'   => 'Podría crear nuevos estatus en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de estatus',
            'slug'          => 'estatus.edit',
            'description'   => 'Podría editar cualquier dato de un estatus del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar estatus',
            'slug'          => 'estatus.destroy',
            'description'   => 'Podría eliminar cualquier estatus del sistema',      
        ]);


         //hospital

        Permission::create([
            'name'          => 'Navegar hospital',
            'slug'          => 'hospital.index',
            'description'   => 'Lista y navega todos los hospitales del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un hospital',
            'slug'          => 'hospital.show',
            'description'   => 'Ve en detalle cada hospital del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de un hospital',
            'slug'          => 'hospital.create',
            'description'   => 'Podría crear nuevos hospitales en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de hospital',
            'slug'          => 'hospital.edit',
            'description'   => 'Podría editar cualquier dato de un hospital del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar hospital',
            'slug'          => 'hospital.destroy',
            'description'   => 'Podría eliminar cualquier hospital del sistema',      
        ]);

        //piso

        Permission::create([
            'name'          => 'Navegar piso',
            'slug'          => 'piso.index',
            'description'   => 'Lista y navega todos los pisos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un piso',
            'slug'          => 'piso.show',
            'description'   => 'Ve en detalle cada piso del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de un piso',
            'slug'          => 'piso.create',
            'description'   => 'Podría crear nuevos pisos en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de piso',
            'slug'          => 'piso.edit',
            'description'   => 'Podría editar cualquier dato de un piso del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar piso',
            'slug'          => 'piso.destroy',
            'description'   => 'Podría eliminar cualquier piso del sistema',      
        ]);



        //cuarto

        Permission::create([
            'name'          => 'Navegar cuarto',
            'slug'          => 'cuarto.index',
            'description'   => 'Lista y navega todos los cuartos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un cuarto',
            'slug'          => 'cuarto.show',
            'description'   => 'Ve en detalle cada cuarto del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de un cuarto',
            'slug'          => 'cuarto.create',
            'description'   => 'Podría crear nuevos cuartos en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de cuarto',
            'slug'          => 'cuarto.edit',
            'description'   => 'Podría editar cualquier dato de un cuarto del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar cuarto',
            'slug'          => 'cuarto.destroy',
            'description'   => 'Podría eliminar cualquier cuarto del sistema',      
        ]);


        //pabellon

        Permission::create([
            'name'          => 'Navegar pabellon',
            'slug'          => 'pabellon.index',
            'description'   => 'Lista y navega todos los pabellones del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un pabellon',
            'slug'          => 'pabellon.show',
            'description'   => 'Ve en detalle cada pabellon del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de un pabellon',
            'slug'          => 'pabellon.create',
            'description'   => 'Podría crear nuevos pabellones en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de pabellon',
            'slug'          => 'pabellon.edit',
            'description'   => 'Podría editar cualquier dato de un pabellon del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar pabellon',
            'slug'          => 'pabellon.destroy',
            'description'   => 'Podría eliminar cualquier cuarto del sistema',      
        ]);

            //reportes

        //grafica

        Permission::create([
            'name'          => 'Ver porcentaje de la grafica',
            'slug'          => 'grafica',
            'description'   => 'Ve en detalle de la grafica del sistema',            
        ]);

            //asignacioncuarto

        Permission::create([
            'name'          => 'Ver las asignaciones del los cuartos',
            'slug'          => 'asignacioncuarto',
            'description'   => 'Ve en la asignacion de cuarto del sistema',            
        ]);

          //horarioronda

        Permission::create([
            'name'          => 'Ver los horarios',
            'slug'          => 'horarioronda',
            'description'   => 'Ve en la asignacion horarios de empleados del sistema',            
        ]);

           //Suscripcion

        Permission::create([
            'name'          => 'Ver las suscripciones',
            'slug'          => 'Suscripcion',
            'description'   => 'Ve en las suscripciones del sistema',            
        ]);







    }
}
