# frontend
En primer lugar, se debe levantar el servidor del API REST. Porque se debe modificar el IP del servidor donde se ejecuta el ws.
Primero modificar el IP en el archivo “index.php”
Cambiar el IP=192.168.137.170 por el IP que se generara o habilitara para el servicio web que se mostrara en el navegador:
Una vez modificado el IP del web services (API), para levantar se ejecuta el siguiente comando:
  docker-compose up –d
Verfiicamos que este creado la imagen y corriendo:
  docker-compose ps
Verificamos si levanto correctamente ingresando por el navegador
