# Moodle Nginx

**Este projeto foi desenvolvido para utilizar o Moodle com Nginx em vez de Apache ou XAMPP, visando melhorar a performance e a flexibilidade do ambiente.**

Na empresa em que trabalho, recebi a task de migrar o Moodle para rodar em Nginx, já que utilizávamos uma imagem Bitnami (que vem com Apache por padrão), mas enfrentávamos lentidão no ambiente.

Para resolver isso, busquei aprender sobre Nginx e volumes no Docker, estruturando uma stack limpa e eficiente para subir o Moodle de forma organizada, rápida e com fácil manutenção.

## Tecnologias Utilizadas
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)
![Nginx](https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white)

## Instalação

1) Clone o repositório:
```bash
git clone git@github.com:iOnilec/mdl_nginx.git
```

2) Crie a pasta de dados do moodle na raiz do repositório:
```bash
mkdir moodledata

sudo chmod -R 777 moodledata
```

3) Execute o docker:
```bash
docker compose up -d
```

#### [Moodle!](http://127.0.0.1:8002)

## Nota

- Repo criado e desenvolvido para fins de estudo e prática de como funciona a migração de um ambiente, volumes e imagens no docker e configuração de um servidor nginx.
