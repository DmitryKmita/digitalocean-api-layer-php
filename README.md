# Basic Digital Ocean V2 API Layer

I have created this library to easily work with Digital Ocean V2 API.
Library is currently just a skeleton, will be improved in near future.

# Set up

- create config yml file with contents:
```
config:
    host: '' #DO API host
    token: '' # API token
```
- Create a Config Model and load your config
```
    $config = new \DoApiLayer\Config\Config();
    $config->fromYaml('path_to_config_file');
```
- Use the service factory to get instance of api service and pass your Config as a parameter
```
    $factory = new \DoApiLayer\Factory\ApiServiceFactory();
    $service = $factory->getInstance($config);
```
- Use the service methods to work with API

# Work in progress, next plans

- Replace static Config class by Config loader with .yml (/)
- Separate every entity work in each service
- Account functionality
- Droplet functionality
- Domain functionality
- Image functionality
- SSH Keys functionality
- Regions functionality
- Sizes functionality
- Floating IPs functionality
- Tags functionality
- Basic Overview functionality (gets data and returns a nice overview of everything most important)
- Symfony Bundle layer using this library

Really waiting from DO to make possibility to get graphs, then maybe will implement even a dashboard/app.