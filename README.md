# Phinch-docker
A docker container to self-host Phinch (phinch.org).

To get started:
```
docker run -d --publish 8081:80 --name phinch iimog/phinch
```
This will run Phinch on port 8081 so open up your browser at [http://localhost:8081](http://localhost:8081).
All features are working, including sharing. However no mails are sent.
