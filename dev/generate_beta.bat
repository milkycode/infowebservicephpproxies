echo "PromotionalOffice PHP Webservice Generator"
echo "This version will create proxy for Promotional Office beta versions only."
echo "See README.md for additional information."

del /S /F CustomerImportService
d:\xampp\php\php wsdl2phpgenerator-2.5.5.phar -i https://po-test3.promidata.com/Promidata/PromotionalOffice/Services/UniversalImporter/CustomerImportService.svc?wsdl -o CustomerImportService
del /S /F ClientBackendService
d:\xampp\php\php wsdl2phpgenerator-2.5.5.phar -i https://po-test3.promidata.com/Promidata/PromotionalOffice/Services/Info/ClientBackendService.svc?wsdl -o ClientBackendService
del /S /F UniversalImporterDocumentationService
d:\xampp\php\php wsdl2phpgenerator-2.5.5.phar -i http://po-test3.promidata.com/Promidata/PromotionalOffice/Services/UniversalImporter/UniversalImporterDocumentationService.svc?wsdl -o UniversalImporterDocumentationService