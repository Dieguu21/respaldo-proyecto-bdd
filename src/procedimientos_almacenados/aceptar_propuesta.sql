CREATE OR REPLACE FUNCTION 
aceptar_propuesta (id_propuesta int)
RETURNS void AS


$$
BEGIN
    UPDATE Propuestas SET estado = true WHERE id_propuesta = id_propuesta;
END
$$ language plpgsql