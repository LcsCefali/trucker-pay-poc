### Como rodar o projeto

- Lembre-se de criar o seu .env (temos o .env.example para ajudar)
- É necessário ter um banco de dados MySQL rodando em localhost (Tome cuidado com a porta e database passado no .env)
- Instalar dependencias
```sh
  composer install && npm install && npm run dev
```
- Rodar as migrations
```sh
  php artisan migrate
```
- Criar chave para a aplicação Laravel
```sh
  php artisan key:generate
```

**Pronto! Agora é só navegar no projeto rodando o comando**
```sh
  php artisan serve
```