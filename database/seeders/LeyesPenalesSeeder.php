<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeyesPenalesSeeder extends Seeder
{
    public function run(): void
    {
        $leyesPenales = [
            [
                'descripcion_ley' => 'Ley N.º 21.208 - Tipifica acciones que atentan contra la libertad de circulación.
                Penaliza acciones que interfieren con la libre circulación de personas o vehículos en la vía
                pública mediante violencia o intimidación. También sanciona el saqueo en situaciones de calamidad pública o alteración del orden.
                Esta ley fue Promulgada por Sebastián Piñera Echenique'
            ],
            [
                'descripcion_ley' => 'Ley N.º 21.170 - Modifica penas por robo de vehículos y bienes dentro de estos.
                Endurece las penas por robo de vehículos y receptación, especialmente cuando se utilizan técnicas de distracción para sustraer los vehículos.
                Además, se agravan las penas si el delito pone en peligro a menores o personas vulnerables dentro del vehículo.
                Esta key fue Promulgada por Sebastián Piñera Echenique.​'
            ],
            [
                'descripcion_ley' => ' Ley N.º 20.931 - Facilita la aplicación de penas por robo, hurto y receptación.
                Establece Modificaciones al Código Penal para endurecer las penas por robo con violencia o intimidación, y facilita la persecución penal en dichos delitos.
                Además, se establecen penas más severas para la receptación de bienes robados.
                Esta ley fue Promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.393 - Responsabilidad penal de las personas jurídicas.
                Establece que Las personas jurídicas pueden ser penalmente responsables por delitos como el financiamiento de terrorismo, 
                lavado de activos y cohecho, cometidos por sus directivos o empleados cuando no se implementan modelos de prevención de delitos.
                Esta ley fue Promulgada por el Congreso Nacional de Chile​'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.253 - Modificaciones sobre seguridad ciudadana y atribuciones policiales.
                Establece y Refuerza las atribuciones preventivas de las policías y modifica el Código Penal para mejorar la seguridad ciudadana. 
                Introduce cambios en el control de identidad y la forma de investigar delitos.
                Esta ley fue Promulgada por el Congreso Nacional de Chile.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.245 - Reforma Constitucional sobre la entrada en vigencia de leyes procesales.
                La ley establece que las leyes procesales relacionadas con la organización y atribuciones de los tribunales, 
                o con los sistemas de enjuiciamiento, pueden tener fechas de entrada en vigor diferentes en cada región del país, 
                pero el plazo máximo para que entren en vigor en todo el país no podrá exceder de cuatro años.
                Esta ley fue Promulgada por Michelle Bachelet.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.084 - Sistema de responsabilidad de adolescentes por infracciones a la ley penal.
                Regula la responsabilidad penal de adolescentes entre 14 y 18 años por los delitos cometidos, 
                su procedimiento y sanciones. Esta ley prioriza el interés superior del adolescente, reconociendo sus derechos y garantías legales.
                Esta ley fue Promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.718 - Crea la Defensoría Penal Pública.
                Establece: La creación de un servicio público descentralizado encargado de proporcionar defensa penal a los imputados o acusados de crímenes, 
                simples delitos o faltas, que no cuenten con abogado.
                esta ley fue Promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.708 - Adecuaciones al Código Orgánico de Tribunales.
                Establece Modificaciones al Código Orgánico de Tribunales para adecuarlo al nuevo Código Procesal Penal. 
                Refuerza las competencias de los tribunales penales y su estructura.
                Esta ley fue Promulgada por Ricardo Lagos'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 899 - Reglamento para el funcionamiento del Banco Unificado de Datos.
                Establece: Crea un banco unificado de datos para facilitar la aplicación de penas en delitos de robo, hurto y receptación.
                Este banco de datos es administrado por las policías para mejorar la persecución penal.
                Este decreto fue Promulgado por Sebastian Piñera'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 253 - Modificaciones al Código Procesal Penal sobre medidas cautelares.
                Introduce modificaciones en las normas del Código Procesal Penal para mejorar la regulación de las medidas cautelares aplicables en procesos penales.
                Este decreto fue Promulgado por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 83 - Reglamento sobre el sistema de seguridad ciudadana.
                Establece Normas sobre el sistema de seguridad ciudadana, reforzando las atribuciones de las policías y 
                estableciendo nuevos procedimientos para la protección y vigilancia de la seguridad pública.
                este decreto fue Promulgado por el Ministerio del Interior'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 495 - Normas de protección de los derechos de las víctimas en procesos penales.
                Establece Procedimientos específicos para garantizar los derechos de las víctimas de delitos durante el proceso penal, 
                desde la investigación hasta la ejecución de las penas.
                este decreto fue Promulgado por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.806 - Modificaciones al Código Procesal Penal.
                Establece: Reforma el Código Procesal Penal para adecuar las normas procesales a las nuevas reglas de enjuiciamiento criminal.
                Se mejoran los procedimientos judiciales para garantizar los derechos de los imputados y las víctimas.
                Esta ley fue Promulgada por Ricardo Lagos Escobar'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.794 - Adecuación de la Ley N.º 19.665 sobre Tribunales.
                Realiza adecuaciones a la Ley N.º 19.665, que modifica el Código Orgánico de Tribunales, adecuándola al nuevo Código Procesal Penal. 
                Regula las competencias de los jueces y tribunales para el enjuiciamiento de delitos.
                Esta ley fue Promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.696 - Reforma la Ley Orgánica del Ministerio Público.
                Introduce modificaciones a la Ley Orgánica del Ministerio Público para mejorar su funcionamiento y garantizar la transparencia y efectividad en la investigación
                y persecución de delitos. Esta ley fue Promulgada por Ricardo Lagos Escobar'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.665 - Nueva Ley de Organización de Tribunales Penales.
                Reorganiza los tribunales con competencia penal y adapta su funcionamiento a los cambios introducidos por el nuevo Código Procesal Penal. 
                Refuerza las competencias de los jueces en materia penal. esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.640 - Ley Orgánica del Ministerio Público.
                Establece El Ministerio Público es responsable de la dirección de la investigación penal, protección de víctimas y testigos, y ejercer la acción penal pública. 
                Este organismo es autónomo y jerarquizado, sin facultades jurisdiccionales. esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Ley N.º 19.519 - Modifica el Código Penal y otras leyes sobre delitos sexuales.
                Establece: Endurece las penas por delitos sexuales, en especial los cometidos contra menores de edad, y 
                establece nuevas normas para la protección de las víctimas durante el proceso judicial. esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Ley N.º 1853 - Código de Procedimiento Penal.
                Establece: El Código de Procedimiento Penal regula los procesos judiciales penales en Chile, 
                definiendo las normas aplicables para la investigación, procesamiento y juzgamiento de crímenes, delitos y faltas. 
                El código también detalla las competencias de los tribunales penales y los procedimientos que deben seguirse en cada fase del juicio. 
                Además, incluye disposiciones sobre derechos de los acusados, medidas cautelares, y la ejecución de penas.
                Esta ley fue Promulgada por Jerman Riesco Errázuriz'
            ],
            //añade mas leyes
        ];

        foreach ($leyesPenales as $leyes) {
            DB::table('leyes_penales')->updateOrInsert(
                ['descripcion_ley' => $leyes['descripcion_ley']], // Condición para encontrar el registro existente
                ['descripcion_ley' => $leyes['descripcion_ley']] // Datos a actualizar o insertar
            );
        }
    }
}
