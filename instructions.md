
## Setting Up a Yii2 Environment with Docker

Follow these steps to prepare your Yii2 application development environment using Docker. <br> 
This guide assumes you are using Visual Studio Code and the vscode tasks are included in the repo.  <br>
You can use [Tasks](https://marketplace.visualstudio.com/items?itemName=actboy168.tasks) or any other similar extension to make running tasks easier. <br>
If you're not using Visual Studio Code you can read the shell commands in `.vscode/tasks.json`

### Prerequisites

-   **Docker Desktop**: Install [Docker Desktop](https://www.docker.com/products/docker-desktop/) on your machine.

### Step-by-Step Guide

#### 1. **Download Docker Desktop**

-   Ensure Docker is installed and running on your system.

#### 2. **Create and Configure `docker-compose.yml`**

-   Navigate to your project directory and copy `docker-compose-dev.yml` to `docker-compose.yml`.

#### 3. **Build Docker Containers**

-   **Task Name**: `docker compose build`
    

#### 4. **Install Dependencies**
-   **Get Git Token**: get one from [here](https://github.com/settings/tokens/new?scopes=&description=)

-   **Set Git Token**: copy `/php-cli/Dockerfile-default` as `/php-cli/Dockerfile` and paste the token over YOUR_OAUTH_TOKEN 

-   **Task Name**: `composer-install`    

#### 5. **Initialize the Application**

-   **Task Name**: `init` ( run as dev )

#### 6. **Launch the Docker Environment**

-   **Task Name**: `docker compose-up`   

#### 7. **Run Database Migrations**

-   **Task Name**: `yii-migrate-up`    

#### 8. **Create a user for the backend**

-   **Task Name**: `yii-run-action`    
-   **Input**: `users/create`
-   **Input**: `[username] [email] [password]`


### Additional Information

-   **Accessing the Application**: Upon successful setup, the Yii2 application will be accessible via the configured localhost.
- frontend: http://localhost:20900
- backend: http://localhost:20901
- phpmyadmin: http://localhost:20903
