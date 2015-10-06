# Linux Mint 17: Unable to install iNZight (dependencies have non-zero exit status)

A recently noted issue is the lack of a suitable `C` compiler, which results in failed installation of dependencies.

Hopefully, it is as simple as running:
```
sudo apt-get install g++
```
