var datos;
var productId;
var operacio;
var children;
var preuTotal;
var idComanda;

function clickSub(x){
    $(document).ready(function(){
        $.ajax({url: "/?accio=click-subcategoria&id=" + x.getAttribute('name'), success: function(result){
                $(document.getElementById("inicio")).innerHTML=" ";
                $(document.getElementById("inicio")).html(result);
            }});
    })
}

function clickProducto(x){
        $(document).ready(function () {
            $.ajax({
                url: "/?accio=load-product-details&id=" + x.getAttribute('name'), success: function (result) {
                    //$("#selectmencio").html(result);
                    datos = $("#grid").attr("class");
                    $(document.getElementById("inicio")).innerHTML=" ";
                    $(document.getElementById("inicio")).html(result);
                    $(document.getElementById("inicio")).css('background-color', 'gray');

                }
            });
        })
        //window.location.href = "/../controllers/controllerLlistarCategories.php?nameSubCategory="+nombre+""
}

function cambia(){
    $(document).ready(function() {
        $.ajax({
            url: "/?accio=load-product&id=" + datos, success: function(result){
                $(document.getElementById("inicio")).innerHTML=" ";
                $(document.getElementsByClassName("productDetails")).remove();
                $(document.getElementById("inicio")).html(result);
            }});
    })
}

function addToCart(){
    productId = document.getElementById("producte").value;
    $(document).ready(function() {
        $.ajax({
            url: "/?accio=add-to-cart&id=" + productId, success: function(result){
                $(document.getElementsByClassName("productesCistella")).html(result);
            }});
    })
}

function carregaOpcions(x){
    $(document).ready(function(){
        $.ajax({url: "/?accio=load-menu-options", success: function(result){
                $(".usermenu").html(result);
            }});
    })
}

function canviaCistell(){
    children = $(".scroll").children().length;
    switch (children) {
        case 0:
            $(".scroll").css({"height": "15px"});
            break;
        case 1:
            $(".scroll").css({"height": "226px"});
            break;
        case 2:
            $(".scroll").css({"height": "453px"});
            break;
        default:
            //$(".imatge").css({"margin-left": "10px"});
            $(".scroll").css({"overflow-y": "scroll", "height": "453px"});
            break;
    }
}


function carregaCistell(){
    $(document).ready(function() {
        $.ajax({
            url: "/?accio=add-to-cart", success: function(result){
                $(document.getElementsByClassName("productesCistella")).html(result);
                canviaCistell();
            }});
    })
}

function numberProduct(x,id){
    operacio = x.value;
    if(operacio=="+"){
        operacio="1";
    }else{
        operacio="0";
    }

    $(document).ready(function(){
        $.ajax({
            url: "/?accio=add-to-cart&opera="+operacio+"&identificador="+id, success: function(result){
                $(document.getElementsByClassName("productesCistella")).html(result);
        }});
    })
}

function deleteSession(){
    $(document).ready(function(){
        $.ajax({
            url: "/?accio=delete-session", success: function(result){
                $(document.getElementsByClassName("scroll")).html("");
                $(document.getElementsByClassName("totalPrice")).html(result);
                canviaCistell();
            }});
    })
}

function preu(){
    preuTotal =$(".valuePrice").text();
    $(document).ready(function(){
        $.ajax({
            url: "/?accio=comprar&preuTotal="+preuTotal, success: function(result){
                // Descomentar la siguiente linea para comprobar errores cuando se inserta un producto
                // Hay que convertir el boton compra en button y no submit antes de descomentar la linea
                // El resultado de error mostrara en la pagina princial, debajo del carousel
                // Si no hay error, se desmonta la pagina. Pero no hay problema porque esto siempre ha de estar comentado
                //      $(document.getElementsByClassName("informacion")).html(result);
                deleteSession();

        }});
    })
}

function mostrarComanda(x){
    idComanda = $(x).attr('id');
    $(document).ready(function(){
        $.ajax({
            url: "/?accio=mostrarComanda&idComanda="+idComanda, success: function(result){
                $(document.getElementById("borra")).remove();
                $(document.getElementById("añade")).html(result);
        }});
    })
}