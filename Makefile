##

DATE := $(shell date +%Y/%m/%d)
HOSTNAME := $(shell hostname)

all:		add commit push
		echo $(DATE)-$(HOSTNAME) "github への更新完了"

# ((github))
# http形式	https://github.com/tohrusaitoh/recp.git
# ssh形式	git@github.com:tohrusaitoh/recp.git

add:;		git add -u
commit:;	git commit -m $(DATE)-$(HOSTNAME)
push:;		git push origin main

pull:;		git pull origin main
