pipeline {
    agent any
    
    stages {
        stage('Clonar repositorio') {
            steps {
                bat 'rmdir /S /Q PipelineJenkinsProject'
                bat 'git clone https://github.com/Endorsmoch/PipelineJenkinsProject.git'
            }
        }
        
        stage('Ejecutar test cases') {
            steps {
                bat 'php artisan test'
            }
        }

        stage('Construir imagen Docker') {
            steps {
                bat 'docker build -t pipelinesicei .'
            }
        }
        
        stage('Desplegar imagen Docker') {
            steps {
                bat 'docker stop contenedor-pipelinesicei >nul 2>&1 || true'
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