(function (){
	'use stric';

	var plantilla= '<div class="col-md-4 text-center col-sm-6 col-xs-6">'
                        '<div class="thumbnail product-box">'+
                            '<img src="assets/img/dummyimg.png" alt="" />'+
                            '<div class="caption">'+
                                '<h3><a href="#"><%=nombre%></a></h3>'+
                                '<p>Price : <strong>$<%=precio%></strong>  </p>'+
                                '<p><a href="#">Ptional dismiss button </a></p>'+
                                '<p><%=descripcion%></p>'+
                                '<p><a href="#" class="btn btn-success btn-producto-cuh" cuh-productoid="<%=idProducto>" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>'+
                            '</div>'+
                        '</div>';
                    //</div>

              $.getJSON("http://localhost/Actividad1/public/producto"
              function(r){
              	var tmpl=$("#producto");
                 var tmp=_.template(plantilla);
              	for(var i=0; i<r.length;i++){
                  var h=tmp(r[i]);
              		tmpl.apped(h);
              	}

                  /*Agregar productos al carrito*/

              $(".btn-producto-cuh").on("click",function(e){
                var btnClicked=$(e.target);//boton seleccionado
                var idProducto=$(btnClicked).attr("cuh-productoid");//acceder al producto localizado
                alert("ID producto seleccionado: "+idProducto);
              });

              //Fin de agregar productos al carrito

              });
              
           })();


           
              