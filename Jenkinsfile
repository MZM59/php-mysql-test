pipeline{
  
  agent any
  
  stages{
    stage("build"){
      steps{
        echo "building APP"
        sh 'php --version'
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
  }
}
