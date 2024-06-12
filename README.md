<p align="center">
    <a href="https://www.tesseractechnologies.com/" target="_blank">
        <img src="https://bc081af2.rocketcdn.me/wp-content/uploads/2024/02/tesseract-technologies-scuro.webp" height="100px">
    </a>
    <h1 align="center">MovieMate Project Template</h1>
    <br>
</p>

There's a [task.md](task.md) and an [instructions.md](instructions.md) to help you get started.

If you have issues/questions don't hesitate to write at tecnico@tesseractechnologies.com.


### What is this project about?

This is a test project for you to practice with Yii2 and Docker. <br>
It's a simple movie database application that will be deployed using Docker. <br>
The purpose of this project is to evaluate your attitude and skills in programming.


### Useful tools

You will find a task description in [task.md](task.md) and more detailed instructions in [instructions.md](instructions.md).

Feel free to submit your work for review at tecnico@tesseractechnologies.com.


Some useful documentation below:

[MVC](https://yii2-cookbook-test.readthedocs.io/mvc/) - 
[Migrations](https://yii2-framework.readthedocs.io/en/stable/guide/db-migrations/) - 
[GII](https://www.yiiframework.com/doc/guide/2.0/en/start-gii) - 
[API](https://www.yiiframework.com/doc/api/2.0)


DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
