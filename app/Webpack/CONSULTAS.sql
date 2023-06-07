USE digit;








SELECT id, ciclo_academico, fecha, observacion, 
puntaje_total, 
CASE
    WHEN puntaje_total <= 150 THEN "A"
    WHEN  puntaje_total > 150 AND  puntaje_total <=162 THEN "B"
    WHEN  puntaje_total > 162 AND  puntaje_total <=180 THEN "C"
END as clasificacion,
persona_id, 
procedencia_id, carga_familiar_id, orfandad_id, situacion_economica_id, dependencia_economica_id, 
pension_mensual_id, vivienda_id, clasificacion_socioeconomica_id, credito_matriculado_id, credito_aprobado_id, semestre_id 
from fichas;