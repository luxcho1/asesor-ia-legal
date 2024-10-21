<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeyesCivilesSeeder extends Seeder
{
    public function run(): void
    {
        $leyesCiviles = [
            [
                'descripcion_ley' => 'Ley N.º 21.264 - Suprime el impedimento de segundas nupcias.
                Modifica el Código Civil y la Ley N.º 20.830 (Acuerdo de Unión Civil) para suprimir el impedimento de segundas nupcias, 
                permitiendo que una mujer pueda contraer matrimonio sin el antiguo requisito de esperar 270 días tras la disolución del anterior. 
                También establece presunciones de paternidad cuando una mujer da a luz después de un segundo matrimonio​.
                Esta ley fue Promulgada por Sebastián Piñera'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.680 - Protege la integridad del menor cuando sus padres viven separados.
                Introduce modificaciones al Código Civil y otros cuerpos legales, promoviendo el principio de corresponsabilidad entre padres para el cuidado 
                y educación de sus hijos cuando viven separados. 
                Permite que el cuidado personal sea compartido entre ambos padres y define criterios para proteger el interés superior del menor.
                Esta ley fue Promulgada por Sebastián Piñera'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.585 - Modifica el Código Civil en materia de filiación.
                Introduce cambios importantes en el régimen de filiación, eliminando las distinciones entre hijos legítimos e ilegítimos. 
                Todos los hijos tienen igualdad de derechos, independientemente de la situación matrimonial de sus padres
                Esta ley fue Promulgada por Eduardo Frei Ruiz-Tagle'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.335 - Modifica el Código Civil en régimen de gananciales.
                Establece Un régimen de participación en los gananciales que permite que, tras la disolución del matrimonio, 
                las ganancias obtenidas durante la unión se dividan entre los cónyuges.
                Esta ley fue promulgada por el Congreso Nacional De Chile​'
            ],
            [
                'descripcion_ley' => 'Ley N.º 21.515 - Modifica diversos cuerpos legales para establecer la mayoría de edad como requisito para el matrimonio.
                Esta ley modifica el Código Civil y otros cuerpos legales para establecer la mayoría de edad (18 años) como requisito esencial para la celebración del matrimonio.
                Anula el matrimonio de menores de edad y establece nuevas disposiciones sobre el divorcio para quienes se casaron siendo menores.
                Esta ley fue Promulgada por Gabriel Boric Font'
            ],
            [
                'descripcion_ley' => 'Ley N.º 21.400 - Regula en igualdad de condiciones el matrimonio entre personas del mismo sexo.
                Establece Modificaciones al Código Civil y otras leyes para permitir y regular el matrimonio entre personas del mismo sexo, 
                garantizando igualdad de derechos en materia de filiación, bienes y sucesión​.
                Esta ley fue Promulgada por Sebastián Piñera'
            ],
            [
                'descripcion_ley' => 'Ley N.º 21.367 - Suprime la causal de conducta homosexual en el divorcio por culpa.
                Elimina la causal de conducta homosexual como motivo de divorcio por culpa, modificando la Ley de Matrimonio Civil.
                Esta ley fue Promulgada por Sebastián Piñera​'
            ],
            [
                'descripcion_ley' => 'Ley N.º 21.042 - Aplica al trabajador que celebra un acuerdo de unión civil el permiso laboral que se otorga a quien contrae matrimonio.
                Garantiza que los trabajadores que celebren un Acuerdo de Unión Civil (AUC) tendrán derecho a un permiso laboral pagado de cinco días hábiles, 
                equivalente al que se otorga en caso de matrimonio.
                Esta ley fue Promulgada por Michelle Bachelet Jeria'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.830 - Crea el Acuerdo de Unión Civil (AUC).
                Establece Crea el Acuerdo de Unión Civil, un contrato entre dos personas que comparten un hogar, 
                con el objetivo de regular los efectos jurídicos derivados de su convivencia estable y permanente. 
                Este contrato otorga el estado civil de "conviviente civil".
                Esta ley fue Promulgada por Michelle Bachelet Jeria​'
            ],
            [
                'descripcion_ley' => ' Ley N.º 20.239 - Libera del Impuesto a la Renta las compensaciones económicas originadas al término de un matrimonio.
                Establece Las compensaciones económicas acordadas al término del matrimonio estarán exentas del Impuesto a la Renta. 
                Esto aplica tanto a las compensaciones pactadas por los cónyuges como a aquellas decretadas judicialmente.
                Esta ley fue Promulgada por Michelle Bachelet Jeria.​'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.086 - Introduce modificaciones a la aplicación de los procedimientos de la ley de Tribunales de Familia.
                Establece Modificaciones en los procedimientos aplicados en los Tribunales de Familia, mejorando la protección de los derechos de niños, 
                niñas y adolescentes en los procesos judiciales, y reforzando la idoneidad profesional de jueces y peritos involucrados.
                Esta ley fue promulgada por Ricardo Lagos Escobar​'
            ],
            
        ];

        foreach ($leyesCiviles as $leyes) {
            DB::table('leyes_civiles')->updateOrInsert(
                ['descripcion_ley' => $leyes['descripcion_ley']], // Condición para encontrar el registro existente
                ['descripcion_ley' => $leyes['descripcion_ley']] // Datos a actualizar o insertar
            );
        }
    }
}
