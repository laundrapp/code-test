# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # this is preferred over "ubuntu/xenial64" as official ubuntu boxes do not follow recommended vagrant standards
  config.vm.box = "bento/ubuntu-16.04"

  config.vm.provider "virtualbox" do |v|
      v.memory = 1024
  end

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "private_network", ip: "192.168.62.70"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  config.vm.synced_folder "../code-test", "/sites/laundrapp.ws/code-test", owner: "vagrant", group: "www-data", mount_options: ["dmode=775"]

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.

  config.vm.provision "pre", type: "shell", run: "once" do |s|

    s.inline = <<-SHELL
      #!/bin/bash

      set -e

      export DEBIAN_FRONTEND=noninteractive

      # install python
      apt-get update
  
      apt-get install -y \
        composer \
        php7.0-dom \
        php7.0-zip \
        php7.0-mbstring

    SHELL
  end

end
