<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeyesEconomicasSeeder extends Seeder
{
    public function run(): void
    {
        $leyesEconomicas = [
            [
                'descripcion_ley' => 'Ley 20.780: Reforma Tributaria que Modifica el Sistema de Tributación de la Renta.
                Introduce modificaciones al sistema tributario en Chile, principalmente sobre el Impuesto a la Renta. 
                Establece cambios en las normas de atribución de rentas y define nuevos conceptos relacionados con la renta atribuida. 
                También aborda la ubicación de las fuentes de renta y establece regulaciones sobre bonos y títulos de deuda.
                Esta ley fue promulgada por el Congreso Nacional de Chile y sancionada por el Presidente Ricardo Lagos Escobar.'
            ],
            [
                'descripcion_ley' => 'Ley 20.899: Simplificación del Sistema de Tributación a la Renta.
                Esta ley perfecciona el sistema tributario y simplifica la tributación a la renta, 
                introduciendo ajustes en el cálculo y declaración de impuestos para diferentes contribuyentes y empresas. 
                Regula los instrumentos derivados y establece requisitos de certificación para deducción de gastos.
                Esta ley fue promulgada por Congreso Nacional de Chile y sancionada por el Presidente Ricardo Lagos Escobar.'
            ],
            [
                'descripcion_ley' => 'Ley 19.995: Bases Generales para la Autorización, Funcionamiento y Fiscalización de Casinos de Juego.
                Esta ley regula la autorización y el funcionamiento de los casinos de juego en Chile, 
                estableciendo requisitos específicos para la operación de estos negocios. Asimismo, 
                fija impuestos especiales para los casinos y distribuye los ingresos fiscales entre las municipalidades y gobiernos regionales.
                Esta ley fue promulgada por el Congreso Nacional de Chile y sancionada por el Presidente Ricardo Lagos Escobar.'
            ],
            [
                'descripcion_ley' => 'Decreto 55: Reglamento de la Ley sobre Impuesto a las Ventas y Servicios.
                Aprueba el reglamento que establece las disposiciones detalladas del Impuesto al Valor Agregado (IVA), 
                así como otros impuestos adicionales aplicables a productos específicos como las bebidas alcohólicas y otros productos regulados.
                Este decreto fue promulgado por el Ministerio de Hacienda de Chile, bajo las facultades conferidas por la Constitución.'
            ],
            [
                'descripcion_ley' => 'Ley 20.856: Reforma de la Ley de Casinos.
                Modifica la legislación sobre los casinos, ampliando las regulaciones relacionadas con los juegos de azar y la fiscalización de las operaciones. 
                Además, establece un impuesto de un 20% sobre los ingresos brutos obtenidos por las sociedades operadoras de casinos.
                Esta ley fue Promulgada por el Congreso Nacional de Chile y sancionada por el Presidente Ricardo Lagos Escobar.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.544 - Regulación del Tratamiento Tributario de Instrumentos Derivados.
                Esta ley regula el régimen tributario de los instrumentos financieros derivados 
                (forwards, futuros, swaps, opciones, etc.), estableciendo cómo deben tributar este tipo de contratos y transacciones.
                Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => ' Ley N.º 20.365 - Franquicia Tributaria para Sistemas Solares Térmicos.
                Establece que Las empresas constructoras que instalen sistemas solares térmicos para agua caliente en sus proyectos 
                habitacionales pueden acceder a una deducción tributaria, incentivando el uso de energía solar en viviendas nuevas.
                Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Ley N.º 18.502 - Impuestos a los Combustibles. 
                Establece impuestos específicos sobre el consumo de gas natural comprimido y gas licuado de petróleo, destinados principalmente a vehículos motorizados.
                Esta ley fue promulgada por la Junta de Gobierno de la República de Chile'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 1027 - Reglamento del Sistema de Trazabilidad Fiscal.
                Establece Un sistema de trazabilidad fiscal para productos como el tabaco, con el fin de garantizar la correcta fiscalización y pago de impuestos.
                Afecta a productores, fabricantes, importadores y distribuidores. Este decreto fue Promulgado por el Ministerio de Hacienda'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 79 - Texto Refundido del Decreto N.º 348 de 1975. 
                Establece Refundición del decreto original que regula a las empresas exportadoras de bienes y servicios, 
                permitiéndoles recuperar impuestos específicos sobre ventas e importaciones destinadas a la exportación.
                Esta decreto fue Promulgado por el Ministerio de Economía'
            ],
            [
                'descripcion_ley' => 'Decreto con Fuerza de Ley N.º 1 - Artículo 8.
                Establece: Normas específicas sobre la recuperación de impuestos indebidos y su restitución al fisco.
                Regula también las sanciones y la forma de ajuste de los montos devueltos. Este decreto fue Promulgado por el Ministerio de Hacienda'
            ],
            [
                'descripcion_ley' => 'Decreto con Fuerza de Ley N.º 1.
                Establece el Texto refundido y sistematizado del Código Civil y otras leyes relacionadas con el Registro Civil, 
                cambio de nombres y apellidos, ley de menores y ley sobre pensiones alimenticias. Este decreto fue Promulgado por el Ministerio de Justicia'
            ],
            // Agregar más leyes económicas aquí
        ];

        foreach ($leyesEconomicas as $leyes) {
            DB::table('leyes_economicas')->updateOrInsert(
                ['descripcion_ley' => $leyes['descripcion_ley']], // Condición para encontrar el registro existente
                ['descripcion_ley' => $leyes['descripcion_ley']] // Datos a actualizar o insertar
            );
        }
    }
}