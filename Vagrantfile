Vagrant.configure("2") do |config|
  config.vm.box = "centos/7"
  config.vm.hostname = "AE-DevOps-Test"
  config.vm.network "private_network", ip: "192.168.50.10"
  config.vm.network "forwarded_port", guest: 80, host: 9001
#  config.vm.synced_folder "./redistest", "/var/www/redistest"
  config.vm.provider "virtualbox" do |vb|
    vb.memory = "1024"
    vb.cpus = "2"
  end
  config.vm.provision "shell", :path => "bootstrap/init.sh"
end
