pipeline {
    agent any
    stages{
        stage("init"){
            steps{
                echo "initializing"
                sh 'php install php'
            }
        }
        
        stage("build"){
            steps{
                echo "Building APP"
            }
        }
        
        stage("test"){
            steps{
                echo "Testing APP"
            }
        }
        
        stage("deploy"){
            steps{
                echo "Deploying APP"
            }
        }
