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
- Get the needed service depends on which entity you want to work with and use its methods
```
    $factory = new \DoApiLayer\Factory\ApiServiceFactory();
    $service = $factory->getInstance($config);
    $service->getAccountService()->getAccountInfo();
```

# Services and methods
[R] -> token has to have read permissions, [W] -> token has to have write permissions

- Account Service ($apiService->getAccountService())
> getAccountInfo() - returns all information about current account [R]

- Droplet Service ($apiService->getDropletService())
> getAllDroplets() - returns all information about all droplets created on this account [R]
> createDroplet(Droplet $droplet) - created a droplet. Model should contain name, image, region, size. [W]
```
    $droplet = new \DoApiLayer\Model\Droplet();
    $droplet->setName('Amazing Droplet');
    $droplet->setSizeSlug('size_slug'); #512mb for example

    $image = new \DoApiLayer\Model\Image();
    $image->setName('image_name'); #ubuntu-14-04-x64 for example
    $droplet->setImage($image);
    $droplet->setRegion('region_name'); #nyc3 for example
    $result = $service->getDropletService()->createDroplet($droplet);
```
> destroyDroplet($id) - destroys a droplet. Be careful with this one :) [W]

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