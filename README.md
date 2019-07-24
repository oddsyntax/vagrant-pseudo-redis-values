# vagrant-pseudo-redis-values


Vagrant in this project is configured to use a CentOS 7 base box on VirtualBox provider.

Port forwarding is set up from 9001 on the host to web server port 80 on the VM.

A script is created for provisioning located in the vagrant directory (bootstrap/init.sh) and run from the Vagrantfile.

PHP / PHP-Redis was used for the Redis interaction.

The default shared vagrant folder was used to contain the web server content rather than configuring an additional shared folder. 

I took the easy way out and disabled SELinux for the sake of simplicity, and also disregarded any normal method of configuring network security, etc.

The index.php page itself contains a hybrid html/php mix of content which was heavily used in my former environment. It is not the most graceful method but it is what came to me the fastest so I went with it in the interest of budgeting time.

vagrant up will probably run somewhat faster if you comment out the "yum update -y” portion in bootstrap/init.sh
