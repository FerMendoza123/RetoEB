<h2>How to run the project</h2>
<p>1.- Install Laragon (full edition) from this link.</p>
<a href="https://laragon.org/download/index.html">Laragon Download Page</a>
<p>2.- Clone the respository in the path "c:\laragon\www".</p>
<p>3.- Open Laragon and press the button "Iniciar todo".</p>
<p>4.- Press the button "Terminal". </p>
<p>5.- If the current directory is not C:\laragon\www\RetoEB use the command 'cd RetoEB'.</p>
<p>6.- Use the command 'composer install'.</p>
<p>7.- Make right click on the laragon's window, browse through the menus your folder www>Explorar>RetoEB.</p>
<p>8.- Once in the folder change the name to the file '.env.example' for '.env'.</p>
<p>NOTE: if the file is missing you can download it from <a href="https://raw.githubusercontent.com/laravel/laravel/master/.env.example"> this link</a>.</p>
<p>8.- In the terminal use the command 'php artisan key:generate'.</p>
<p>9.- Make right click on the laragon's window, browse through the menus your folder www>RetoEB.</p>
<br>
<br>
<h2>Notes</h2>

<h3>Class Diagram</h3>

<img src="http://drive.google.com/uc?export=view&id=1ht7IPs_PfXo2zP6Oivz4QzTzBsQaU8wn">

<p>When the moment of refactoring the code arrived, i just thought it would be a good idea to properly suit all the methods in classes in such way that they were coherent and easier to understand (to be honest i focused first on programming the needed functionalities), that is the reason i designed a class for the properties list's page and a class for the property page.</p>

<img src="http://drive.google.com/uc?export=view&id=1M10q50pwMwUtTVPWtTjPulCHE2iX7h6Q">
 
<p>The ListController class has just one method that given the number of a page loads the list's view along with the complete JSON for the page, because the pagination section is useful to set the links for the next and previous page (i had methods that changed the page but handle this from the DOM links is much more easier and simpler).</p>

<img src="http://drive.google.com/uc?export=view&id=13kRM4NUZ7WYgOFA3sJdHSqwpbd8mDBn5">

<p>The PropertyController class has the method 'loadProperty' that given a property's id loads the view with the JSON that contains the information of the property, it also has the method 'printValidData' that given an attribute, a tag and a label prints the attribute on the DOM only if it contains information, the method 'postContactReq' sends the post request for the contact and redirects back to the property's view with the response from the server, this was the most dificult part to implement, not because it's hard to do, rather because i wasted some time trying to set the headers in the request on the backend, but i got some errors because doing it deleted the body (don't know why) and at the end i opted for making the whole request.</p>

<p>The Controller class has just one method that given a link and an instance's id returns the JSON from the response, i think it is suitable in this occasion due the functionalities that were requested but i really doubt it would be apropiate on a real application.</p>

<h2>Final thoughts </h2>
<p>If i had more time i would like to add the slideshow for the property page, also i would like to start again developing everithing driven by tests, as i mentioned before i did't even start with the design of the classes, this chalenge gave me the chance to apply OOP concepts and understanding them better, in a similar way i can see how it could be if i did it starting by the desing and the tests, in spite of everything all the functionalities work and i'm happy about that.</p>                                           


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   R e t o E B 
 
 