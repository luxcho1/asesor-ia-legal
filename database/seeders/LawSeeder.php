<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Law;
use Illuminate\Support\Facades\DB;

class LawSeeder extends Seeder
{
    public function run()
    {
        $laws = [
            [
                'content' => 'Ley N.º 20.699 - Día de la Adopción y del que está por Nacer: Establece que el 25 de marzo de cada año como el "Día del que está por nacer y de la adopción". 
                Esta fecha conmemora la importancia de la vida en gestación y la adopción como una alternativa para aquellos que buscan formar una familia.
                La ley fue Promulgada por el Sebastián Piñera Echenique (Presidente de la República en 2013)'
            ],
            [
                'content' => 'Ley N.º 19.968 - Crea los Tribunales de Familia: Establece La creación de los Juzgados de Familia como parte del Poder Judicial. 
                Estos tribunales son responsables de atender casos relacionados con la familia, como asuntos de adopción, violencia intrafamiliar, y otros temas familiares. 
                Incluye una estructura con jueces, consejos técnicos y personal administrativo. Esta ley fue Promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 19.620 - Normas sobre Adopción de Menores: Establece las reglas claras para el proceso de adopción en Chile, 
                priorizando el bienestar del menor y garantizando que
                los adoptados tengan derecho a crecer en una familia que les brinde afecto y cuidados. 
                La ley establece cómo se maneja el proceso y las responsabilidades de organismos como el Servicio Nacional de Menores (SENAME). 
                La ley fue Promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 19.585 - Modificaciones al Código Civil en Materia de Filiación: Establece la Igualdad entre todos los hijos,
                eliminando distinciones legales entre hijos legítimos e ilegítimos. 
                Reorganiza las reglas de filiación, estableciendo derechos y obligaciones claras para los padres en relación con sus hijos. 
                La ley fue Promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 21.254 - Modificaciones sobre Retención de Fondos Previsionales: Establece las Regulaciones para la retención 
                judicial de fondos de cuentas previsionales en casos de deuda alimentaria. 
                También permite suspender el retiro de fondos de pensiones para cubrir deudas de pensiones alimenticias pendientes.
                Ley promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 21.389 - Crea el Registro Nacional de Deudores de Pensiones de Alimentos: Establece: La creación de un registro electrónico de acceso público 
                para deudores de pensiones alimenticias. Su objetivo es garantizar el cumplimiento de estas obligaciones mediante medidas como la retención de fondos y 
                sanciones para los incumplidos. La ley fue Promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 21.057 - Regula entrevistas videograbadas para menores de edad víctimas de delitos sexuales: Establece que regula las entrevistas 
                investigativas videograbadas y declaraciones judiciales de menores víctimas de delitos sexuales. Previene la victimización secundaria de niños, niñas y adolescentes. 
                Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 20.066 - Establece la Ley de Violencia Intrafamiliar: Define la violencia intrafamiliar y regula su prevención, sanción y erradicación. 
                Garantiza protección a las víctimas y crea mecanismos de denuncia y asistencia. Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 20.030 - Modifica la Ley de Matrimonio Civil (Sobre Cuidado Personal): 
                Establece Modificaciones a la Ley de Matrimonio Civil, en particular sobre el régimen de cuidado personal de los hijos en casos de separación de los padres. 
                Busca garantizar el interés superior del menor, facilitando el acuerdo entre los padres sobre el cuidado y estableciendo que en caso de conflicto, 
                será el juez quien decida el régimen de cuidado. Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 19.947 - Establece Nueva Ley de Matrimonio Civil: 
                Establece un nuevo régimen para el matrimonio civil, regulando los requisitos para contraer matrimonio, la forma de su celebración, la separación de los cónyuges, 
                la nulidad del matrimonio y los efectos del divorcio. La ley da especial énfasis al respeto del interés de los hijos y el cónyuge más vulnerable. 
                Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 19.335 - Régimen de Participación en los Gananciales: 
                Establece un régimen económico matrimonial llamado "participación en los gananciales", que permite que los cónyuges mantengan la administración 
                independiente de sus patrimonios, pero al finalizar el matrimonio se repartan las ganancias obtenidas durante la unión. 
                Es una alternativa a la sociedad conyugal y a la separación de bienes. Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 21.378 - Monitoreo telemático en casos de violencia intrafamiliar: 
                Establece el Monitoreo telemático para supervisar medidas de protección en casos de violencia intrafamiliar, prohibiendo que el agresor se acerque a la 
                víctima mediante dispositivos electrónicos supervisados por Gendarmería. Esta ley fue Promulgada por Adriana Muñoz D Albora (Senadora)'
            ],
            [
                'content' => 'Ley N.º 21.226 - Régimen jurídico por el impacto del COVID-19: 
                Establece medidas excepcionales para procesos judiciales debido al COVID-19, como la suspensión de audiencias presenciales y la implementación de medios remotos​. 
                Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 21.140 - Modifica la Ley N.º 20.032 sobre atención a la niñez y adolescencia
                Establece: Reformas al sistema de atención a menores de edad a través de la red del SENAME, incorporando criterios como la transparencia y responsabilidad en el 
                manejo de recursos y la protección de derechos humanos. Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 21.067 - Crea la Defensoría de los Derechos de la Niñez
                Establece la creación de un organismo autónomo encargado de promover y proteger los derechos de los niños, con facultades para interponer acciones 
                judiciales en defensa de estos derechos. 
                Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            [
                'content' => 'Ley N.º 21.013 - Nuevo delito de maltrato y protección de personas vulnerables
                Establece penalización del maltrato corporal a menores, adultos mayores y personas con discapacidad, además de medidas como la inhabilitación para trabajar en 
                ciertos cargos​. Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],

            [
                'content' => 'Ley N.º 20.480 - Tipifica el femicidio
                Establece El delito de femicidio, aumentado las penas para este crimen y reformando la normativa sobre parricidio y violencia intrafamiliar. 
                Esta ley fue promulgada por el Congreso Nacional de Chile'
            ],
            // Añade más leyes aquí

        ];

        foreach ($laws as $law) {
            DB::table('leyes_familiares')->updateOrInsert(
                ['content' => $law['content']], // Condición para encontrar el registro existente
                ['content' => $law['content']] // Datos a actualizar o insertar
            );
        }
    }
}