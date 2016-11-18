node {

    currentBuild.result = 'SUCCESS'

    try {

        stage 'Checkout'
            checkout scm

        stage 'Install'
            sh 'php -f composer.phar install -n'

        stage 'Static Analysis'
            sh 'rm -rf ./reports/'
            sh 'mkdir ./reports'
            sh './vendor/bin/phpcs --report=checkstyle --extensions=php --encoding=utf-8 --report-file=./reports/checkstyle.xml ./src/'
            sh './vendor/bin/phpmd ./src/ xml cleancode,codesize,controversial,design,naming,unusedcode --reportfile ./reports/pmd.xml'

        stage 'Tests'
            sh './vendor/bin/phpunit -c phpunit.xml.dist --log-junit ./reports/junit/result.xml'

    } catch (err) {
        currentBuild.result = 'FAILURE'

        throw err
    }
}
