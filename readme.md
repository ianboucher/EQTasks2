EquiniTasks
=================

EquiniTasks was the result of a 3 hour coding challenge to build a simple LAMP stack to-do app. EquiniTasks2 is the second iteration of that project to provide a comparison of approach - RESTful API with full front-end framework vs. Laravel for the full-stack.

Installation
------------------

EquiniTasks2 was developed within the Laravel/Homestead environment, and the following instructions assume access to a Homestead environment:

**Clone this repo into your Homestead mapped folder and add the following to your ```~/.homestead/Homestead.yaml file:```**

```ruby
sites:
    - map: eqtasks2.local
      to: /home/vagrant/Code/EqTasks/public

databases:
  - eqtasks2_db      
```

**Then map the IP address in your /etc/hosts file, like so:**

```
192.168.10.10   eqtasks2.local
```

**Then it should be a case of navigating to your Homestead directory and running:**

```
vagrant up --provision
```

**Once the Vagrant box has finished provisioning, run:**

```
vagrant ssh
cd /your/vagrant/box/structure/EqTasks2
php artisan migrate
php artisan db:seed
```

**Navigate to:**

```
http://eqtasks.local
```


Project Dependencies:
---------------
- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/) (via CDN)
