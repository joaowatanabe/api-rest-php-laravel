# 🎬 Movie API - REST API para Estudos

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="350" alt="Laravel Logo">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-%3E%3D%208.3-8892BF?style=for-the-badge&logo=php" alt="PHP Version">
  <img src="https://img.shields.io/badge/Laravel-v13.x-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PostgreSQL-Database-4169E1?style=for-the-badge&logo=postgresql" alt="PostgreSQL">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

---

## 📝 Descrição do Projeto

Esta é uma **API RESTful simples e moderna** para gerenciamento de filmes, desenvolvida com o framework **PHP Laravel 13** e banco de dados **PostgreSQL**. 

O projeto foi criado com foco em **estudos e práticas de desenvolvimento de APIs**, cobrindo conceitos essenciais do ecossistema Laravel:
* 📡 **Roteamento de API** utilizando rotas padronizadas (`apiResource`).
* 🎛️ **Arquitetura MVC** com Controllers específicos para APIs.
* 🛡️ **Validação robusta de requisições** para garantir a integridade dos dados enviados.
* 📦 **Transformação de Dados** utilizando Laravel `API Resources` para formatar e padronizar as respostas JSON.
* 🗄️ **Banco de dados PostgreSQL** utilizado para a persistência dos dados.

---

## 🛠️ Tecnologias Utilizadas

* **Linguagem:** PHP >= 8.3
* **Framework:** Laravel 13.x
* **Banco de Dados:** PostgreSQL
* **Gerenciador de Dependências:** Composer

---

## 🚀 Como Executar o Projeto

Siga os passos abaixo para rodar o projeto localmente em sua máquina.

### Pré-requisitos
* **PHP** (versão 8.3 ou superior)
* **Composer** instalado globalmente
* Servidor **PostgreSQL** rodando localmente

### 1. Clonar o Repositório
```bash
git clone https://github.com/joaowatanabe/api-rest-php-laravel.git
cd api-rest-php-laravel
```

### 2. Configurar as Dependências e Variáveis de Ambiente
Copie o arquivo de exemplo `.env.example` para `.env`:
```bash
cp .env.example .env
```

Abra o arquivo `.env` e configure as credenciais de acesso ao seu banco de dados PostgreSQL:
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=api_rest_laravel
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

Certifique-se de que o banco de dados especificado em `DB_DATABASE` (ex: `api_rest_laravel`) esteja criado em seu servidor PostgreSQL.

Instale as dependências da aplicação:
```bash
composer install
```

Gere a chave da aplicação:
```bash
php artisan key:generate
```

Rode as migrações para estruturar o banco de dados:
```bash
php artisan migrate
```

### 3. Executar o Servidor de Desenvolvimento
Inicie o servidor local do Laravel utilizando:
```bash
composer run dev
```
ou simplesmente:
```bash
php artisan serve
```

A API estará disponível por padrão em: `http://localhost:8000/api`

---

## 📡 Endpoints da API

A API expõe as operações tradicionais de CRUD para o recurso `movies`. Todas as respostas são retornadas no formato JSON.

| Método | Endpoint | Descrição |
| :--- | :--- | :--- |
| **GET** | `/api/movies` | Retorna a lista de filmes (paginada de 10 em 10) |
| **POST** | `/api/movies` | Cadastra um novo filme no sistema |
| **GET** | `/api/movies/{id}` | Retorna os detalhes de um filme específico |
| **PUT/PATCH** | `/api/movies/{id}` | Atualiza os dados de um filme existente |
| **DELETE** | `/api/movies/{id}` | Remove um filme do banco de dados |

---

## 📥 Exemplos de Payload

### 1. Cadastrar um Filme (`POST /api/movies`)

**Corpo da Requisição (JSON):**
```json
{
  "title": "Inception",
  "director": "Christopher Nolan",
  "genre": "Sci-Fi",
  "release_year": 2010,
  "rating": 8.8,
  "synopsis": "A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O."
}
```

**Regras de Validação:**
* `title` (obrigatório, string, max 255)
* `director` (obrigatório, string, max 255)
* `genre` (obrigatório, string, max 100)
* `release_year` (obrigatório, inteiro, 4 dígitos)
* `rating` (opcional, numérico entre 0 e 10)
* `synopsis` (opcional, string)

**Resposta de Sucesso (Status `201 Created`):**
```json
{
  "data": {
    "id": 1,
    "title": "Inception",
    "director": "Christopher Nolan",
    "genre": "Sci-Fi",
    "release_year": 2010,
    "rating": "8.8",
    "synopsis": "A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.",
    "created_at": "2026-06-11T21:10:00.000000Z",
    "updated_at": "2026-06-11T21:10:00.000000Z"
  }
}
```

---

## 🧪 Rodando os Testes

Para rodar a suíte de testes da aplicação, utilize:
```bash
composer run test
```
ou
```bash
php artisan test
```

---

## 📄 Licença

Este projeto é de código aberto e está sob os termos da licença [MIT](LICENSE).
