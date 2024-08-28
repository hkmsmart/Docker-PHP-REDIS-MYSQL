 Docker üzerine Php ve Redis container tanımlamalarını yapıyoruz "docker-compose.yml"
 


>    docker-compose up -d

docker-compose.yaml dosya içeriği:
    
- container_name: webserver 
    burada dockerfile dosyamız içerisinde php:8.2.0-apache sürümünü çağrıyoruz ve php için         gerekli extension ları indiriyoruz.

- image: mysql:8.0 
    ilgili veritabanı sürümünü şifre ve port ayarlarını tanımlıyoruz.

- image: phpmyadmin/phpmyadmin 
    Veritabanı arayüz erişimi için phpmyadmin tanımlayıp mysql ayarlarını yapaıyoruz.

- dockerfile: ./redis/Dockerfile
    Redis ile port şifre ayarlarını yapıyoruz.

Tüm containerları aynı ağda "bridge" ekliyoruz.
