node {

    currentBuild.result = 'SUCCESS'

    try {

        stage 'Checkout'
            checkout scm

        stage 'Install'
            sh 'php -f composer.phar install -n'

        stage 'Tests'
            sh './vendor/bin/phpunit -c phpunit.xml.dist'

    } catch (err) {
        currentBuild.result = 'FAILURE'

        throw err
    }
}
