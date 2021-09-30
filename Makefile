DATE := $(shell date +%Y/%m/%d)
HOSTNAME := $(shell hostname)

all:;		echo $(DATE)-$(HOSTNAME)

add:;		git add -u
commit:;	git commit -m $(DATE)-$(HOSTNAME)
push:;		git push origin main
pull:;		git pull origin main
