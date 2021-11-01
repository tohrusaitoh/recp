##

# ((github))
# http形式	https://github.com/tohrusaitoh/recp.git
# ssh形式	git@github.com:tohrusaitoh/recp.git

GH_ID		= tohrusaitoh
GH_PROJECT	= recp
GH_HTTPS	= https://github.com/$(GH_ID)/$(GH_PROJECT).git
GH_SSH		= git@github.com:$(GH_ID)/$(GH_PROJECT).git

REPOSITORY	= origin
BRANCH		= main

DATE		:= $(shell date +%Y/%m/%d)
HOSTNAME	:= $(shell hostname)

all:		add commit push
		@echo $(GH_HTTPS)
		@echo $(GH_SSH)
		@echo Project:$(GH_PROJECT) Repository:$(REPOSITORY) Branch:$(BRANCH)
		@echo $(DATE)-$(HOSTNAME) "github への更新完了"

add:;		git add -u
commit:;	git commit -m $(DATE)-$(HOSTNAME)
push:;		git push $(REPOSITORY) $(BRANCH)

pull:;		git pull $(REPOSITORY) $(BRANCH)

shopping.db:	sampleG-create-table.sql	\
		sampleG-insert-itemlist.sql	\
		sampleG-insert-userlist.sql	\
		sampleG-insert-buylist.sql
		bash sampleG.sh
clean:;		rm -f *.db
