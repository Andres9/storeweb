<?php
class ControladorProductos
{
    static public function ctrMostrarCategorias($item, $valor)
    {

        $tabla = "categorias";

        $respuesta = ModeloProducto::mdlMostrarCategorias($tabla, $item, $valor);

        return $respuesta;

    }

    static public function ctrMostrarSubcategorias( $item, $valor)
    {
        $tabla = "subcategorias";

        $respuesta = ModeloProducto::mdlMostrarSubcategorias($tabla, $item, $valor);

        return $respuesta;
    }

    /* MOSTRAR PRODUCTOS */

   static  public function ctrMostrarProductos($ordenar,$item,$valor){
        $tabla = "productos";

        $respuesta = ModeloProducto::mdlMostrarProductos($tabla,$ordenar,$item,$valor);

        return $respuesta;

    }
}
