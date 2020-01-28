# The iNZight website

To set up on a local production environment, you need [vagrant](https://www.vagrantup.com) installed.

Then, just get started:
```
$ vagrant up
```

To get Sass running:
```
$ vagrant ssh -c runsass
```

That'll keep watching for any changes and update the CSS on the fly.

If, however, you just want to compile the CSS once, simply omit the `--watch` argument.


-----

Having played around and edited things, you'll want to put the VM to sleep (otherwise the host machine will be slow ...)
```
$ vagrant suspend
```
... or, if you are homicidal, you can
```
$ vagrant destroy
```
which will completely remove the VM and free up diskspace (if you need it).

__Now stop wasting time reading README files and write some code!!!__
