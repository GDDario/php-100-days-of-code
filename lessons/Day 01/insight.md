### History

Created by [Rasmus Lerdorf](https://en.wikipedia.org/wiki/Rasmus_Lerdorf), PHP initially started as a series of CGI scripts written in C. Over time, it evolved into the modern language we have today.

Originally, it was called "Personal Home Page Tools."

In 1995, it was renamed "PHP/FI" (Personal Home Page/Form Interpreter).

Currently, PHP continues to evolve, with version 8 released in November 2020. This version introduced new features such as the JIT (Just-In-Time) compiler, typing improvements, and various performance and security enhancements.

Over the years, PHP has remained an essential tool in web development, being used on millions of websites and by major platforms such as  WordPress, Facebook, and Wikipedia.


### Installation (Ubuntu 24.04 LTS)

### PPA
To install all the versions, we need to install a PPA.

In Ubuntu, we run:
```sh
sudo apt-get install software-properties-common  
sudo add-apt-repository ppa:ondrej/php  
sudo apt-get update
sudo apt install phpX.x
```

### Extensions
All the PHP extensions available for Ubuntu are in this site:
https://packages.ubuntu.com/noble/php/
Obs: replace noble with the Ubuntu version.

For **Laravel**, as an example, the extensions are:
```sh
sudo apt install openssl php8.3-bcmath php8.3-curl php8.3-json php8.3-mbstring php8.3-mysql php8.3-tokenizer php8.3-xml php8.3-zip
```
The requirements are found [here](https://laravel.com/docs/10.x/deployment#server-requirements).