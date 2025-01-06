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
     stage('Install Dependencies') {
            steps {
                echo 'Installing dependencies using Composer...'
                sh '''
                if [ -f composer.json ]; then
                    composer install --no-dev --prefer-dist --optimize-autoloader
                else
                    echo "No composer.json found, skipping dependency installation."
                fi
                '''
            }
        }

        stage('Run Static Analysis') {
            steps {
                echo 'Running PHP CodeSniffer...'
                sh '''
                if [ -f composer.json ] && [ -d vendor/bin ]; then
                    vendor/bin/phpcs --standard=PSR12 src/
                else
                    echo "PHP CodeSniffer is not installed or src directory missing. Skipping static analysis."
                fi
                '''
            }
        }

        stage('Run Unit Tests') {
            steps {
                echo 'Running PHPUnit tests...'
                sh '''
                if [ -f phpunit.xml ] || [ -f phpunit.xml.dist ]; then
                    vendor/bin/phpunit
                else
                    echo "No phpunit.xml configuration found, skipping unit tests."
                fi
                '''
            }
        }

        stage('Run Security Analysis') {
            steps {
                echo 'Checking for vulnerabilities with PHPStan or similar tools...'
                sh '''
                if [ -f composer.json ] && [ -d vendor/bin ]; then
                    vendor/bin/phpstan analyse src/
                else
                    echo "PHPStan or similar tool not installed. Skipping security analysis."
                fi
                '''
            }
        }
    }

    post {
        always {
            echo 'Pipeline completed.'
        }
        success {
            echo 'All tests passed successfully!'
        }
        failure {
            echo 'Some tests failed. Please review the logs.'
        }
    }
}
