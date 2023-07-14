SAE Lectures | WebDev | PHP.1 "Simple Chat"
This repository provides a very basic Chat example with extremely minimal dependencies, 
running inside a dockerized PHP environment

Build Dev-Environment with Docker
docker build -t chat .

Run Dev-Environment
docker run -p 80:80 chat

Test it in the browser of your computer
Call this URL in your web browser: http://localhost

Check running containers
You can check whether the container is running by executing docker container list

This will return a list of all containers with their corresponding container IDs

Kill (stop) a running container
To kill a running container, execute docker kill <container_id>
