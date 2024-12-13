# Tarefeiro 
Tarefeiro é um gerenciador de tarefas simples, projetado para ajudar a organizar e priorizar atividades do dia a dia.

## URL's locais para acesso à API:

> Registrar as URL's do projeto no arquivo etc/hosts do Linux.
Adicionar a URL base da API.

> Comando: sudo nano /etc/hosts.

- 127.0.0.1       api-tarefeiro.docker.dev

## Iniciar a aplicação:
> Para utilizar a API, certifique-se de possuir o Docker(v24.0.7) e docker compose (1.29.2)
> Na raiz do projeto execute os comandos: 
    docker-compose build
    docker-compose up

> verifique o status do serviço: https://api-tarefeiro.docker.dev/status
    - deve retornar {status: ok}




