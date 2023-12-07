CREATE OR REPLACE FUNCTION 
crear_propuesta (nombre text, inicio date, termino date, recinto text, artistas text, productora text, hospedaje text, traslado varchar)
RETURNS void AS

$$
BEGIN
    INSERT INTO propuestas VALUES (nombre, inicio, termino, recinto, artistas, productora, NULL, hospedaje, traslado);
END
$$ language plpgsql