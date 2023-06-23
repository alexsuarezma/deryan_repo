<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Gasto;
use App\Models\Produccion;
use App\Models\Venta;
use App\Models\Empleado;
use App\Models\Producto;

use Carbon\Carbon;

class HomeController extends Controller
{
    public function dashboard() {
        return view('dashboard');
    }

    public function grupoCarnicos() {
        return view('datos.grupo-carnicos');
    }

    public function repositorio() {
        return view('datos.repositorio');
    }

    public function results() {
        return view('resultados.resultado');
    }

    public function analisisAsociacion() {
        return view('analisis.asociacion-productos');
    }

    public function analisisVentas() {
        return view('analisis.prediccion-ventas');
    }

    public function analisisSegmento() {
        return view('analisis.segmento-clientes');
    }

    public function datosObtenidos() {
        return view('reportes.datos-obtenidos');
    }
}
