# Docker Compose

An example of using Docker Composer with external containers. In this example, we create a standalone MySQL container and share it for multiple project using docker-compose.

## 1. Standalone MySQL
Create an standalone MySQL container.

```
$ docker run -dti --name mysql --restart unless-stopped  -v /data/mysql57/data:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=123456 -p 3306:3306 mysql:5.7
```

## 2. Network
Create an external network for using shared containers.

```
# docker network create shared-network
# docker network connect shared-network mysql
```

## 3. Start docker-compose
```
$ docker-compose up -d
```

## 4. Test
Open URL in browser http://localhost:8000
