#!/bin/sh

echo "PromotionalOffice PHP Webservice Generator"
echo "See README.md for additional information."

if [ -z "$1" ]; then
    echo "Please specify hostname"
else
    echo "CustomerImportService..."
    rm -rf ./CustomerImportService/
    php wsdl2phpgenerator-2.5.5.phar -i http://$1/PromotionalOffice/Services/UniversalImporter/CustomerImportService.svc?wsdl -o ./CustomerImportService/

    echo "ClientBackendService..."
    rm -rf ./ClientBackendService/
    php wsdl2phpgenerator-2.5.5.phar -i https://$1/PromotionalOffice/Services/Info/ClientBackendService.svc?wsdl -o ./ClientBackendService/

    echo "UniversalImporterDocumentationService..."
    rm -rf ./UniversalImporterDocumentationService/
    php wsdl2phpgenerator-2.5.5.phar -i http://$1/PromotionalOffice/Services/UniversalImporter/UniversalImporterDocumentationService.svc?wsdl -o ./UniversalImporterDocumentationService/
fi
