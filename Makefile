DATE := $(shell date +%Y/%m/%d)
HOSTNAME := $(shell hostname)

all:		add commit push
		echo $(DATE)-$(HOSTNAME)

add:;		git add -u
commit:;	git commit -m $(DATE)-$(HOSTNAME)
push:;		git push origin main
pull:;		git pull origin main
