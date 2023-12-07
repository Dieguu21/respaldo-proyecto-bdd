CREATE OR REPLACE FUNCTION 
rechazar_propuesta (id_propuesta int)
RETURNS void AS


$$
BEGIN
    UPDATE Propuestas SET estado = false WHERE id_propuesta = id_propuesta;
END
$$ language plpgsql