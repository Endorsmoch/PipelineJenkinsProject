pipeline {
    agent any
    
    stages {
        stage('Clonar repositorio') {
            steps {
                bat 'git clone https://github.com/Endorsmoch/PipelineJenkinsProject.git'
            }
        }

        stage('Instalar dependencias') {
            steps {
                bat 'composer install'
            }
        }
        
        stage('Compilar proyecto') {
            steps {
                bat 'php artisan build'
            }
        }
        
        stage('Ejecutar test cases') {
            steps {
                bat 'C:\wamp\bin\php\php8.2.0\php artisan test --filter AlumnosTest'
            }
        }

        stage('Construir imagen Docker') {
            steps {
                bat 'docker build -t pipelinesicei .'
            }
        }
        
        stage('Desplegar imagen Docker') {
            steps {
                bat 'docker stop contenedor-pipelinesicei || true'
                bat 'docker rm contenedor-pipelineasicei || true'
                bat 'docker run -p 8080:80 --env-file env.list --name contenedor-pipelinesicei -d pipelinesicei'
            }
        }
    }
    
    post {
        success {
            echo 'El pipeline se ha completado exitosamente!'
        }
        
        failure {
            echo 'El pipeline ha fallado!'
        }
    }
}