<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeyesLaboralesSeeder extends Seeder
{
    public function run(): void
    {
        $leyesLaborales = [
            [
                'descripcion_ley' => 'Ley N.º 16.744 - Establece normas sobre accidentes del trabajo y enfermedades profesionales.
                Establece Un seguro obligatorio contra accidentes del trabajo y enfermedades profesionales para trabajadores por cuenta ajena,
                funcionarios públicos, trabajadores independientes, y estudiantes que realicen prácticas. 
                Cubre los accidentes laborales y otorga prestaciones económicas y médicas a los afectados.
                Esta ley fue Promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Ley N.º 16.395 - Fija el texto refundido de la Ley de Organización y Atribuciones de la Superintendencia de Seguridad Social.
                Establece La organización y atribuciones de la Superintendencia de Seguridad Social, 
                un organismo público que supervisa el cumplimiento de la normativa sobre seguridad social y seguros de accidentes laborales.
                Esta ley fue Promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 2 - Regula accidentes del trabajo y enfermedades profesionales.
                Establece Disposiciones reglamentarias para la aplicación de la Ley N.º 16.744, sobre seguros de accidentes del trabajo y enfermedades profesionales.
                Regula la afiliación de trabajadores y el financiamiento del seguro.
                Este decreto fue Promulgado por el Ministerio del Trabajo'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 8 - Reglamenta la seguridad laboral en el ámbito minero.
                Establece Normas específicas de seguridad para trabajos en minería, incluyendo medidas preventivas y protocolos para la protección de los trabajadores.
                Regula la inspección y fiscalización de las condiciones laborales en la industria minera.
                este decreto fue Promulgado por el Ministerio de Minería'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 9 - Regula las condiciones de higiene en industrias manufactureras.
                Establece Normas de higiene y seguridad en plantas industriales y manufactureras, con el objetivo de prevenir enfermedades profesionales.
                Regula la ventilación, iluminación, y otros aspectos relacionados con la salud de los trabajadores.
                Este decreto fue Promulgado por el Ministerio de Salud'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 31 EXENTO - Regula la señalización de seguridad en lugares de trabajo.
                Establece La obligación de señalizar adecuadamente las áreas de trabajo y sitios en construcción para prevenir accidentes laborales.
                Regula el uso de señales de seguridad y advertencia en el lugar de trabajo.
                Este decreto fue Promulgado por el Ministerio de Obras Públicas'
            ],
            [
                'descripcion_ley' => ' Decreto N.º 43 - Reglamento sobre prevención de riesgos laborales en empresas.
                Establece Normas sobre la creación de comités paritarios de higiene y seguridad en empresas con más de 25 trabajadores, 
                para supervisar y promover condiciones laborales seguras.
                Regula la prevención de riesgos laborales y la capacitación de los trabajadores.
                Este decreto fue Promulgado por el Ministerio del Trabajo'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 78 - TÍTULO V - Señalización transitoria y medidas de seguridad para trabajos en la vía.
                Establece La señalización de obras viales y medidas de seguridad necesarias para garantizar la protección de los trabajadores y 
                usuarios durante la ejecución de proyectos viales.
                Regula la señalización de tránsito y la protección de los trabajadores en la vía pública.
                Este decreto fue Promulgado por el Ministerio de Obras Públicas'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 19 - Reglamento de manejo de sustancias peligrosas en el trabajo.
                Establece Normas para el manejo seguro de sustancias químicas peligrosas en ambientes laborales, con el fin de evitar accidentes e intoxicaciones.
                Regula el almacenamiento, transporte, y manipulación de sustancias peligrosas en el lugar de trabajo.
                Este decreto fue Promulgado por el Ministerio de Salud'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 20 - Normas de higiene industrial y manejo de maquinaria pesada.
                Establece Reglas sobre el manejo de maquinaria pesada en ambientes laborales, así como la implementación de normas de higiene industrial para proteger a los trabajadores.
                Regula la operación segura de maquinaria y equipos pesados en la industria.
                Este decreto fue Promulgado por el Ministerio del Trabajo'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 72 - Regula las medidas de seguridad en alturas.
                Establece Normas de seguridad para trabajos en altura, incluyendo el uso de equipos de protección personal y andamios.
                Regula la prevención de caídas y accidentes en trabajos en altura.
                Este decreto fue Promulgado por el Ministerio de Obras Públicas'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 160 - Prevención de incendios en el ámbito laboral.
                Establece Medidas preventivas para evitar incendios en lugares de trabajo, y las obligaciones de los empleadores en cuanto a la capacitación y 
                provisión de equipos contra incendios.
                Regula la prevención y extinción de incendios en ambientes laborales.
                Este decreto fue Promulgado por el Ministerio del Trabajo'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 132 - Normas sobre ventilación en lugares cerrados de trabajo.
                Establece Regulaciones sobre los sistemas de ventilación en espacios laborales cerrados para asegurar condiciones de aire saludables.
                Regula la calidad del aire y la ventilación en lugares de trabajo.
                Este decreto fue Promulgado por el Ministerio de Salud'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 594 - Condiciones sanitarias y ambientales básicas en lugares de trabajo.
                Establece Normas generales sobre condiciones sanitarias y ambientales en los lugares de trabajo para evitar enfermedades y accidentes laborales.
                Regula la higiene, limpieza, y seguridad en los ambientes laborales.
                Este decreto fue Promulgado por el Ministerio de Salud'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 67 - Regula el uso de equipos de protección personal.
                Establece La obligatoriedad de que los trabajadores usen equipos de protección personal adecuados a los riesgos presentes en su entorno laboral.
                Regula la provisión, uso, y mantenimiento de equipos de protección personal.
                este decreto fue Promulgado por el Ministerio del Trabajo'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 1907 - Convenio 162: Convenio sobre utilización del asbesto en condiciones de seguridad.
                Establece Normas internacionales adoptadas por Chile para la utilización del asbesto, buscando minimizar los riesgos de exposición a esta sustancia peligrosa.
                Regula la manipulación y uso del asbesto en ambientes laborales.
                Este decreto fue Promulgado por el Ministerio de Salud'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 1907 - Convenio 136: Convenio relativo a la protección contra los riesgos de intoxicación por el benceno.
                Establece Normas internacionales sobre la protección de los trabajadores expuestos al benceno, reduciendo los riesgos de intoxicación en ambientes laborales.
                Regula la manipulación y uso del benceno en el trabajo.
                Este decreto fue Promulgado por el Ministerio de Salud'
            ],
            [
                'descripcion_ley' => 'Ley N.º 21.018 
                Establece una modificacion en el artículo 420 del Código del Trabajo para conferir competencia a los tribunales laborales en casos donde los causahabientes 
                del trabajador (familiares o herederos) demandan al empleador para hacer efectiva su responsabilidad contractual por daños derivados de accidentes laborales o 
                enfermedades profesionales. En caso de responsabilidad extracontractual, se aplican las reglas de la Ley N.º 16.744 (sobre accidentes laborales y enfermedades 
                profesionales)
                Esta ley fue Promulgada por Michelle Bachelet Jeria (Presidenta de la República) en 2017.'
            ],
            [
                'descripcion_ley' => 'Ley N.º 20.022 - Crea Juzgados Laborales y de Cobranza Laboral y Previsional.
                Establece La creación de Juzgados de Letras del Trabajo y Juzgados de Cobranza Laboral y Previsional en diferentes comunas de Chile, 
                para fortalecer el sistema judicial en materia laboral y previsional. Define la competencia y el número de jueces para cada tribunal en distintas regiones del país.
                esta ley fue Promulgada por el Congreso Nacional de Chile'
            ],
            [
                'descripcion_ley' => 'Ley N.º 17.322 - Normas para la Cobranza Judicial de Cotizaciones, Aportes y Multas de las Instituciones de Seguridad Social.
                Establece Reglas para la cobranza judicial de cotizaciones adeudadas por empleadores a las instituciones de seguridad social. 
                Establece que la falta de pago de estas cotizaciones generará un juicio de cobro por parte de la institución o el propio trabajador afectado.
                esta ley fue Promulgada por el Congreso Nacional de Chile​'
            ],
            [
                'descripcion_ley' => 'Decreto N.º 1.153 - Concede Personalidad Jurídica a una ONG para la Reinserción Social y Laboral de Procesados y Condenados.
                Otorga personalidad jurídica a la "Organización No Gubernamental de Desarrollo para la Reinserción Social y Laboral de Procesados y 
                Condenados por la Justicia" y aprueba sus estatutos, facilitando su funcionamiento en la Región Metropolitana.
                este decreto fue Promulgado por el Ministerio de Justicia'
            ],
            [
                'descripcion_ley' => 'Decreto con Fuerza de Ley N.º 1 - Fija el Texto Refundido del Código del Trabajo.
                Establece Un texto refundido, coordinado y sistematizado del Código del Trabajo chileno, que agrupa las normas laborales aplicables en todo el país, 
                garantizando derechos laborales fundamentales como el pago de cotizaciones previsionales, procedimientos de ejecución, 
                y el funcionamiento de los tribunales laborales.
                Este decreto fue Promulgado por el Ministerio del Trabajo'
            ]
        ];

        foreach ($leyesLaborales as $leyes) {
            DB::table('leyes_laborales')->updateOrInsert(
                ['descripcion_ley' => $leyes['descripcion_ley']], // Condición para encontrar el registro existente
                ['descripcion_ley' => $leyes['descripcion_ley']] // Datos a actualizar o insertar
            );
        }    
    }
}
