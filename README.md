# Description
Sets up a development environment for WordPress to easily monitor all outgoing requests, eg to WordPress.org.

# Using
To start the environment (add `-d` for detatched mode):
```
docker-compose up
```

To stop the environment:
```
docker-compose down
```

To stop the environment and remove all data:
```
docker-compose down --volumes
```

WordPress will be available at:
```
0.0.0.0:8000
```

mitmproxy's web interface will be available at:
```
0.0.0.0:8081
```
