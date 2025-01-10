# itw-oberstufe.ch

## To start development...

Make sure that Docker is installed on your system.

### Build and run the containers in detached mode:

```
docker compose up -d --build
```

The project is now running on http://localhost:8400

### Remove containers and all volumes:

```
docker compose down -v
```

## To update Kirby...

Make sure you have Composer installed on your system

### Update Kirby via Composer

```
composer update getkirby/cms
```

Happy Developing! 🎉