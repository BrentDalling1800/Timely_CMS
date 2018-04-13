## Timely-CMS
The Simple, but powerful open source CMS system.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
* PHP 7
* MYSQLI
* Linux Server
* PHPMYADMIN
* Composer
```

### Installing

Get Your Shiny New CMS Up And Running With Our Simple Guide.

Clone our repo to begin.

```
git clone https://github.com/BrentDalling1800/Timely_CMS.git
```

Then Generate Your Application Keys

```
php artisan key:generate
```

You should get something sorta like this

```
Application key [base64:pnPq9UoVZlg0nnruNdwJV5dIcDJ+sJyCYLvOT0qwVok=] set successfully.
```

### Set Your Host

Setting your host allows users to go directly to the app. Follow up with your OS provider for instructions on completing this.

```
var/www/html/[your_folder]/public
```

### Setup Your Database

You need to setup your database so our CMS can grab and store content to be used.

Create the database "project" so our CMS can use the database.

Set a new user with these credentials with access to your database "project" you created.
Username
```
Timely_CMS
```
Password
```
AKFY21ED
```

## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [Bootstrap 4](https://getbootstrap.com) - Used to generate RSS Feeds

## Contributing

Email brent.dalling@timelysystems.com to help contribute to our project.

## Authors

* **Brent Dalling** - *Initial work* - [brent.timelysystems.com](https://github.com/PurpleBooth)


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Laravel Framework
* Bootstrap
