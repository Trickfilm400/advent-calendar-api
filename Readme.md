
# advent-calendar-api

This is a project to get any kind of json data for any advent-calendar website or something else.

You can put your data in a json array and then, depending on the day, you get the entries of the array until this day

This project is designed to be configured for different data storages in the **future**, for example mysql, instead of json files

## Installation

1. put all these files in a web-directory 
2. the `index.php``file is the main entrypoint, so point every single request to this file!
3. For jsonFile usage:
   1. in the `storage` folder put a file named `advent.json` (will be auto-generated on the first request, if it didn't exist)
   2. the json file has the following structure:

```json
{
  "data": [
    {"key": "value"},
    {"key2": "value2"},
    {"key3": "value3"},
    {"key4": "value4"}
  ]
}
```

## Usage

- Make a request and you get the following result:

Example for days before december (like november, so your calendar can get live without any dors opend)
````json
{
  "data": []
}
````

December, 1st:

```json
{
  "data": [
    {"key": "value"}
  ]
}
```

December, 29th (if you have configured enough data in you config):
```json
{
  "data": [
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"},
    {"key": "value"}
  ]
}
```

----
Questions? Open an issue

&copy; Trickfilm400 2021