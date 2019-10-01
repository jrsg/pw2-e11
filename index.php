<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">

        <title>Mi artista favorito</title>

        <link rel="stylesheet" type="text/css" href="estilos.css"/>
    </head>

    <body>
        <div class="contenedor">
            <h1>Mi artista favorito</h1>
            <div>
                <label>
                    Nombre(s)<br>
                    <input type="text">
                </label>
            </div>

            <div>
                <label>
                    Apellidos(s)<br>
                    <input type="text">
                 </label>
            </div>

            <div>
                <label>
                    <input type="radio"> Hombre
                </label>
                <label>
                    <input type="radio"> Mujer
                </label>
            </div>

            <div>
                <label>
                    País de nacimiento<br>
                    <select>
                        <option>Seleccione un país</option>
                    </select>
                 </label>
            </div>

            <div>
                <label>
                    Fecha de nacimiento<br>
                    <input type="date" />
                 </label>
            </div>

            <div>
                <fieldset>
                    <legend>Roles</legend>
                    <label>
                        <input type="checkbox" /> Actor/actriz<br>
                    </label>
                    <label>
                        <input type="checkbox" /> Cantante<br>
                    </label>
                    <label>
                        <input type="checkbox" /> Conductor(a)<br>
                    </label>
                    <label>
                        <input type="checkbox" /> Director(a)<br>
                    </label>
                    <label>
                        <input type="checkbox" /> Escritor(a)<br>
                    </label>
                    <label>
                        <input type="checkbox" /> Modelo<br>
                    </label>
                    <label>
                        <input type="checkbox" /> Pintor(a)<br>
                    </label>
                    <label>
                        <input type="checkbox" /> Productor(a)<br>
                    </label>
                </fieldset>
            </div>

            <div>
                <label>
                    Extracto de biografía<br>
                    <textarea rows="7"></textarea>
                 </label>
            </div>

            <div>
                <label>
                    Fotografía<br>
                    <input type="file"/>
                </label>
            </div>

            <input type="submit" />
        </div>
    </body>
</html>
