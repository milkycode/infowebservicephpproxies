# PromotionalOffice WebservicePhpProxies Documentation

With these PHP proxy classes, you are able to use the Promotional Office Webservice in a very easy way. You can work with objects and you only have to configure the login data and the url of the WSDL file.
You can also use both services (info and import) with the Logon method of each class.

2017 by [milkycode](http://www.milkycode.com)
2015 by [code-x](http://www.code-x.de)

Compatible with PO: **2.14**

## Development

### Updating the references for new versions

Requirements:

- php
- git (will be used to detect changes in service references)
- new webservice reference

The basic references have been generated with [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator)
The phar file is available here: https://github.com/wsdl2phpgenerator/wsdl2phpgenerator-cli

**1. Switch to the dev directory**

**2. Execute the following command with your hostname or ip address**

```
./generate.sh <url or ip>
```

Or on Windows
```
generate.bat
```

*Do not use absolute urls - url will be completed automatically*

Example output of successful generation:

```
CustomerImportService...
Generation complete
ClientBackendService...
Generation complete
UniversalImporterDocumentationService...
Generation complete
```

**3. Check and apply git changes**

by using git status / git diff

Example output of git status:

```
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

	modified:   dev/ClientBackendService/CustomerBackendService.php
	modified:   dev/CustomerImportService/CustomerImportService.php
	modified:   dev/UniversalImporterDocumentationService/UniversalImportDocumentationService.php

Untracked files:
  (use "git add <file>..." to include in what will be committed)

	dev/ClientBackendService/GetIndentInformation.php
	dev/ClientBackendService/GetIndentInformationParameter.php
	dev/ClientBackendService/GetIndentInformationResponse.php
	dev/ClientBackendService/IndentInformationBettermentItem.php
	dev/ClientBackendService/IndentInformationEventItem.php
	dev/ClientBackendService/IndentInformationItem.php
	dev/ClientBackendService/IndentInformationPositionItem.php
```

```
git add .
```

**4. Apply changes to src/PromiData/ structure**

Since the generated content is not structured and does not follow any name scheme, you have to apply the detected changes to the src directory.

This is required to use the service in other frameworks (like Zend) and use their autoloaders.

There exist different kinds of classes

- DTO (will be used within Request or Response)
- Enum
- Exception (not generated by services)
- Interface
- Proxy
- Request
- Response

#### Copy new files and rename them

If the new service reference added new methods, just copy all required fields in the correct location

Example:

- GetIndentInformation.php -> src/Promidata/Service/Request/GetIndentInformation.php (class: Promidata_Service_Request_GetIndentInformation)
- GetIndentInformationResponse.php -> src/Promidata/Service/Response/GetIndentInformation.php (class: Promidata_Service_Response_GetIndentInformation)
- GetIndentInformationParameter.php -> src/Promidata/Service/DTO/GetIndentInformationParameter.php (class: Promidata_Service_DTO_GetIndentInformationParameter)
- IndentInformationBettermentItem.php -> src/Promidata/Service/DTO/IndentInformationBettermentItem.php (class: Promidata_Service_DTO_IndentInformationBettermentItem)
- IndentInformationEventItem.php -> src/Promidata/Service/DTO/IndentInformationEventItem.php (class: Promidata_Service_DTO_IndentInformationEventItem)
- IndentInformationItem.php -> src/Promidata/Service/DTO/IndentInformationItem.php (class: Promidata_Service_DTO_IndentInformationItem)
- IndentInformationPositionItem.php -> src/Promidata/Service/DTO/IndentInformationPositionItem.php (class: Promidata_Service_DTO_IndentInformationPositionItem)

**Pay attention on the response class - the "Response" has been removed**

#### Update reference hints

After changing class names and locations, the type/reference hints have to be updated, too.
**This will help the IDE in code completion and has no effect on runtime.**

#### Proxy class references

Tell the soap client, to use other classes by adding them into the correct section in service reference
You can use the **git diff** to determine all classes you have to add.

Example:

```
'GetIndentInformation' => '\GetIndentInformation',
'GetIndentInformationResponse' => '\GetIndentInformationResponse',
'GetIndentInformationParameter' => '\GetIndentInformationParameter',
'IndentInformationItem' => '\IndentInformationItem',
'IndentInformationEventItem' => '\IndentInformationEventItem',
'IndentInformationPositionItem' => '\IndentInformationPositionItem',
'IndentInformationBettermentItem' => '\IndentInformationBettermentItem'
```

```
'GetIndentInformation' => 'Promidata_Service_Request_GetIndentInformation',
'GetIndentInformationResponse' => 'Promidata_Service_Response_GetIndentInformation',
'GetIndentInformationParameter' => 'Promidata_Service_DTO_GetIndentInformationParameter',
'IndentInformationItem' => 'Promidata_Service_DTO_IndentInformationItem',
'IndentInformationEventItem' => 'Promidata_Service_DTO_IndentInformationEventItem',
'IndentInformationPositionItem' => 'Promidata_Service_DTO_IndentInformationPositionItem',
'IndentInformationBettermentItem' => 'Promidata_Service_DTO_IndentInformationBettermentItem'
```

**Please add these entries to the correct sections in proxy classes**

#### Add function calls to proxy and interface

Interface:

```
/**
 * @param GetIndentInformation $parameters
 * @access public
 * @return Promidata_Service_Response_GetIndentInformation
 */
public function GetIndentInformation(Promidata_Service_Request_GetIndentInformation $parameters);
```

Proxy:

```
public function GetIndentInformation(Promidata_Service_Request_GetIndentInformation $parameters)
{
    return $this->__soapCall('GetIndentInformation', array($parameters));
}
```

#### Change internal ```$version``` in ```Proxy/AbstractService.php```.


**Please check reference hints**
