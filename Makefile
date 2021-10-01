##

# ((github))
# http形式	https://github.com/tohrusaitoh/recp.git
# ssh形式	git@github.com:tohrusaitoh/recp.git

PROJECT		= recp
REPOSITORY	= origin
BRANCH		= main

DATE		:= $(shell date +%Y/%m/%d)
HOSTNAME	:= $(shell hostname)

all:		add commit push
		@echo Project:$(PROJECT) Repository:$(REPOSITORY) Branch:$(BRANCH)
		@echo $(DATE)-$(HOSTNAME) "github への更新完了"

add:;		git add -u
commit:;	git commit -m $(DATE)-$(HOSTNAME)
push:;		git push $(REPOSITORY) $(BRANCH)

pull:;		git pull $(REPOSITORY) $(BRANCH)
