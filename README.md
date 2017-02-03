mastery-api
====
This repository contains the swagger-php used to generate the swagger.json file used at the 
[masterypoints api](https://www.masterypoints.com/api) documentation site.


## Files
```
mastery-api/
├── swagger.json                - the resulting file after parsing the annotations
├── api.php                     - main php file which defines the API
└── Definitions/                - folder with definitions used in the API
    ├── tags.php                - tags used to group routes with
    ├── info.php                - general website/API information
    ├── security-settings.php   - security settings and definitions
    └── Models/                 - models used for different types of responses

```
