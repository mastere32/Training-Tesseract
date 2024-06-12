
## Setting Up a Yii2 Environment with Docker

Follow these comprehensive steps to prepare your Yii2 application development environment using Docker. This guide assumes you are using Visual Studio Code and the vscode tasks are included in the repo.
If you're not using Visual Studio Code you can read the shell commands in `.vscode/tasks.json`

### Prerequisites

-   **Docker Desktop**: Install Docker Desktop on your machine.
    -   **Windows/Mac**: Download from Docker Hub.
    -   **Linux**: Follow the Docker Engine and Docker Compose installation instructions on Docker's website.

### Step-by-Step Guide

#### 1. **Download Docker Desktop**

-   Ensure Docker is installed and running on your system.

#### 2. **Create and Configure `docker-compose.yml`**

-   Navigate to your project directory and copy `docker-compose-dev.yml` to `docker-compose.yml`.

#### 3. **Build Docker Containers**

-   **Task Name**: `docker compose build`
    

#### 4. **Install Dependencies**

-   **Task Name**: `composer-install`    

#### 5. **Initialize the Application**

-   **Task Name**: `init`    

#### 6. **Run Database Migrations**

-   **Task Name**: `yii-migrate-up`    

#### 7. **Launch the Docker Environment**

-   **Task Name**: `docker compose-up`    ù

#### 8. **Create a user for the backend**

-   **Task Name**: `yii-run-action`    
-   **Input**: `users/create`
-   **Input**: `[username] [email] [password]`


### Additional Information

-   **Accessing the Application**: Upon successful setup, the Yii2 application will be accessible via the configured localhost.
- frontend: http://localhost:20900
- backend: http://localhost:20901
- phpmyadmin: http://localhost:20903
