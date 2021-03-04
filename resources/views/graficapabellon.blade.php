@extends('adminlte::layouts.app')

@section('main-content')

<link rel="stylesheet" href="{{url('/')}}/cinepolis/css/tabla.css">

               <center><h1 >Pabellones</h1> </center> 

              
                        <tbody>
                           
    <div id="divLegend" align="center">
                                        <span>
                                            <img id="imgAutoReserved" class="ImageAppletExample" src="../public/img/camilla_disponible.png" border="0">
                                           
                                            <span id="lblAutoReserved" class="Legend">Disponible</span>
                                        </span>
                                        <span>
                                            <img id="imgEmpty" class="ImageAppletExample" src="../public/img/camilla_ocupada.png" border="0">
                                            <span id="lblEmpty" class="Legend">Ocupado</span>
                                        </span>
                                        <span id="divSpecialSeat">
                                            <img id="imgSpecial" class="ImageAppletExample" src="../public/img/camilla_mantenimiento.png">
                                            <span id="lblSpecial" class="Legend">Mantenimiento</span>
                                        </span>
                                        
                                        
                                    
                                        
                                        
                                    </div>

    <table class="auto-style1">
        <tr id="butaca">
            <td class="auto-style3">
                A</td>
            <td>
                &nbsp;</td>
            <td class="auto-style5">&nbsp;</td>
            <td class="auto-style15">
                1<img alt="" src="../public/img/camilla_disponible.png" style="height: 29px; width: 35px" /></td>
            <td class="auto-style15">
                2<img alt="" src="../public/img/camilla_disponible.png" style="height: 29px; width: 35px" /></td>
            <td class="auto-style15">
                3<img alt="" src="../public/img/camilla_disponible.png" style="height: 29px; width: 35px" /></td>
            <td class="auto-style15">
                4<img alt="" src="../public/img/camilla_disponible.png" style="height: 29px; width: 35px" /></td>
            <td class="auto-style15">
                5<img alt="" src="../public/img/camilla_disponible.png" style="height: 29px; width: 35px" /></td>
            <td class="auto-style15">
                6<img alt="" src="../public/img/camilla_disponible.png" style="height: 29px; width: 35px" /></td>
            <td class="auto-style15">
                7<img alt="" src="../public/img/camilla_disponible.png" style="height: 29px; width: 35px" /></td>
            <td class="auto-style15">
                8<img alt="" src="../public/img/camilla_disponible.png" style="height: 29px; width: 35px" /></td>
            <td class="auto-style15">
                9<img alt="" src="../public/img/camilla_disponible.png" style="height: 29px; width: 35px" /></td>
            
            <td class="auto-style10">&nbsp;</td>
            <td class="auto-style12">&nbsp;</td>
            <td class="auto-style3">A</td>
        </tr>
        <tr>
            <td class="auto-style3">B</td>
            <td class="auto-style6"></td>
            <td class="auto-style7"></td>
            <td class="auto-style14">
                1<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                2<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                3<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                4<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                5<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                6<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                7<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                8<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                9<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
          
            <td class="auto-style11"></td>
            <td class="auto-style13"></td>
            <td class="auto-style3">B</td>
        </tr>
        <tr>
            <td class="auto-style3">C</td>
            <td class="auto-style6"></td>
            <td class="auto-style7"></td>
            <td class="auto-style14">
                1<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                2<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                3<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                4<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                5<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                6<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                7<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                8<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
            <td class="auto-style14">
                9<img alt="" src="../public/img/camilla_disponible.png" style="height: 25px; width: 34px" /></td>
           
            <td class="auto-style11"></td>
            <td class="auto-style13"></td>
            <td class="auto-style3">C</td>
        </tr>
</table>
                     

                  
                   
               

@endsection