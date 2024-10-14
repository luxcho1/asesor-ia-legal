<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeyesTributariasSeeder extends Seeder
{
    public function run(): void
    {
        $leyesTributarias = [
            [
                'descripcion_ley' => 'Ley N.º 21.210 - Moderniza la Legislación Tributaria.
                Establece diversas modificaciones al Código Tributario, incluyendo mejoras en la transparencia y uso de tecnología, 
                nuevas regulaciones para las consultas tributarias y derechos de los contribuyentes.
                Esta ley fue promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.899 - Simplifica el Sistema de Tributación.
                Introduce simplificaciones al sistema tributario, como ajustes para pequeñas empresas y medidas contra la evasión fiscal.
                Esta ley fue promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.780 - Reforma Tributaria.
                Reforma el sistema tributario, introduciendo un régimen semiintegrado y atribuido, y cambios en el IVA y otros impuestos.
                Esta ley fue promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.630 - Perfecciona la Legislación Tributaria y Reforma Educacional.
                Modifica la Ley sobre Impuesto a la Renta, imponiendo tributos a la enajenación de derechos sociales y acciones.
                Esta ley fue promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.322 - Fortalece la Jurisdicción Tributaria y Aduanera.
                Establece nuevos tribunales tributarios y aduaneros, promoviendo la independencia y especialización en la resolución de conflictos fiscales.
                Esta ley fue promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.888 - Financiamiento de Objetivos Sociales Prioritarios.
                Modifica el Impuesto al Valor Agregado (IVA) para financiar objetivos sociales del gobierno.
                Esta ley fue promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.840 - Normas para Inversiones en el Extranjero
                Establece disposiciones tributarias para que empresas con capital extranjero realicen inversiones desde Chile en el extranjero.
                Esta ley fue promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.506 - Modificaciones al Impuesto a la Renta.
                Modifica el Decreto Ley 824 sobre Impuesto a la Renta, ajustando diversas disposiciones tributarias.
                Esta ley fue promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.247 - Modificaciones al Impuesto a la Renta y Beneficios a Donaciones Educacionales.
                Ajusta la tasa del IVA y otorga beneficios a las donaciones con fines educativos.
                Esta ley fue promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Decreto con Fuerza de Ley N.º 7 - Ley Orgánica del Servicio de Impuestos Internos.
                Fija la estructura del Servicio de Impuestos Internos y adecúa disposiciones legales relacionadas con la fiscalización tributaria.
                Este decreto fue promulgado por el Ministerio de Hacienda de Chile.'
            ],
            [
                'descripcion_ley' => 'Decreto Ley N.º 824 - Ley sobre Impuesto a la Renta.
                Establece el régimen de tributación de la renta en Chile, definiendo las bases y procedimientos para su aplicación.
                Este decreto fue promulgado por la Junta de Gobierno de Chile.'
            ],
            [
                'descripcion_ley' => 'Decreto Ley N.º 830 - Código Tributario.
                Regula el procedimiento de fiscalización, sanciones, derechos y obligaciones tributarias en Chile, asegurando la recaudación adecuada de impuestos.
                Este decreto fue promulgado por la Junta de Gobierno de Chile.'
            ],
            [
                'descripcion_ley' => 'Decreto con Fuerza de Ley N.º 3 - Ley Orgánica Constitucional de la Dirección de Presupuestos.
                Establece la estructura y funciones de la Dirección de Presupuestos de Chile (DIPRES), regulando la administración y control del presupuesto fiscal.
                Promulgado por el Ministerio de Hacienda de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.738 - Ley Orgánica de la Contraloría General de la República.
                Regula el funcionamiento y atribuciones de la Contraloría General, organismo encargado del control de la legalidad de la administración del Estado.
                Promulgada por el Congreso Nacional de Chile.'
            ],

        ];

        foreach ($leyesTributarias as $leyes) {
            DB::table('leyes_tributarias')->updateOrInsert(
                ['descripcion_ley' => $leyes['descripcion_ley']], // Condición para encontrar el registro existente
                ['descripcion_ley' => $leyes['descripcion_ley']] // Datos a actualizar o insertar
            );
        }
    }
}
