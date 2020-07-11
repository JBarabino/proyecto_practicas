# PROYECTO PRÁCTICAS

## Entrar al contenedor MySQL
- Ejecutamos Docker en la consola: ```sudo service docker start```

- Creamos contenedor SQL en Docker: ```docker pull mysql```

- Ejecutamos el comando para entrar a contenedor SQL: ```docker exec -it db bash```

De todas maneras, con el archivo ya creado docker-compose.yml solo tendríamos que ejecutar Docker y hacer ejecutar el comando ```sudo docker-compose up -d``` para que se abriera el contenedor uno de los contenedores con MySQL.

## Entrar al cliente MySQL por terminal
- ```docker exec -it db bash```

- ```mysql -u user -p```

- (password = pass)

- ```show databases;```

Y aquí ya nos aparecería la Base de Datos 'Restaurantes' a la que podríamos acceder sin problemas.
