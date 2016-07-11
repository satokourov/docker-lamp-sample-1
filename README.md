# docker-lamp-sample-1

DockerでLAMP環境のサンプルを構築  
*apache/php(5.6)/MySQL(5.6)/phpMyadmin

```bash
git clone https://github.com/satokourov/docker-lamp-sample-1.git
cd docker-lamp-sample-1/
docker-compose up -d
```
http://localhost/phpinfo.php  
http://localhost/phpmyadmin/ (root/pass)

```bash
docker-compose stop
```
