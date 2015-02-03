# InfoWebservicePhpProxies Documentation

...

## Development

### Updating the references for new versions

Requirements:

- php
- git (will be used to detect changes in service references)
- new webservice reference

The basic references have been generated with [wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator)

**1. Switch to the dev directory**

**2. Execute the following command with your hostname or ip address**

```
./generate.sh <url or ip>
```

*Do not use absolute urls - will be completed automatically*

**3. Check git changes**

by using git diff

**4. Apply changes to src/PromiData/**

