<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'Productos'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'CodProducto'; // Llave primaria de la tabla

    public $incrementing = false; // Si la llave primaria no es auto incrementable

    protected $keyType = 'string'; // Tipo de la llave primaria

    protected $fillable = [
        'TipoProducto', 'CodProducto', 'CodNombre', 'Producto', 'Medida', 
        'Descripcion', 'Modelo', 'CodMarca', 'CodRubro', 'CodCategoria', 
        'Cuenta', 'CodBarra', 'Fabricante', 'CodProdProv', 'CodProveedor', 
        'DatosTecnicos', 'Fotografia', 'CodService', 'TiempoGarantia', 
        'MargenMin', 'MargenMax', 'Unidad', 'Volumen', 'ValStock', 'Estado', 
        'CodSucLogs', 'CodLogs', 'CodFamilia', 'VerSerie', 'Foto', 
        'CodAsigProv', 'CodSeccion', 'Puntaje', 'canjePunto', 'TipoProveeduria', 
        'ValidarSerie', 'PermiteGarExt', 'Mailing', 'PlanExclusivo', 
        'ActivoPrecio', 'PlanesAdmitidos', 'activaregalo', 'marca', 'Stock', 
        'Link', 'ImagenFile', 'volumen_fisico', 'peso', 'bultos', 
        'vigenciaDesde', 'vigenciaHasta', 'idPaisOrigen', 'Discontinuo', 
        'Fecha_Alta', 'codSubCategoria', 'CodSubCategoria_Nivel1', 
        'CodSubCategoria_Nivel2', 'BultosAlCliente', 'Costo1', 'Flete', 
        'Costo2', 'Iva', 'Utilidad', 'Venta1', 'Venta2', 'Comision', 
        'NTecnico', 'Descuento', 'Activo', 'Dolar', 'DolarCosto', 
        'ControlaSerie', 'Manual', 'Minimo', 'fechaInicio', 'fechaFinal', 
        'unidDispon', 'vigCombo', 'CodPromocion', 'UBICACION', 
        'ActivaPrecio', 'Promocion_Activa', 'Promociones_Detalle', 
        'CodProducto_rel', 'User_Edit', 'id_material', 'Id_Temporada', 
        'id_ocasion', 'id_linea', 'Id_TipoBase', 'StoreId', 'Publicado', 
        'Id_Curva', 'Fecha_Edit', 'Fantasia'
    ];
}
