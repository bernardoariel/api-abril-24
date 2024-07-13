<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        try {
            echo "Entrando a index"; // Verificación de entrada
            $productos = Producto::all();
            return response()->json($productos);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
            echo "Entrando a show"; // Verificación de entrada
            $producto = Producto::find($id);
            if ($producto) {
                return response()->json($producto);
            } else {
                return response()->json(['error' => 'Producto no encontrado'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
