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
                bat 'docker rm pipeline'
                bat 'docker run -p 8081:80 -e APP_ENV=local --name pipeline -d pipelinesicei'
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