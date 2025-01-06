pipeline {
    agent any
    
    environment {
        REPO_URL = 'https://github.com/MZM59/php-mysql-test.git'
        BRANCH = 'main'
    }
    stages {
        stage('Checkout Code') {
            steps {
                echo 'Cloning the repository...'
                git branch: "${BRANCH}", url: "${REPO_URL}"
            }
        }
    }
}
