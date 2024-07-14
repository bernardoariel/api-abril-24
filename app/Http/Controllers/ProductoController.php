<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        try {
            $productos = Producto::all();
            return response()->json($productos);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        try {
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

    public function search(Request $request)
    {
        try {
            $query = Producto::query();

            if ($request->has('CodProducto')) {
                $query->where('CodProducto', $request->input('CodProducto'));
            }

            if ($request->has('Producto')) {
                $query->where('Producto', 'LIKE', '%' . $request->input('Producto') . '%');
            }

            $productos = $query->get();

            if ($productos->isEmpty()) {
                return response()->json(['error' => 'Producto no encontrado!!!'], 404);
            }

            return response()->json($productos);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
