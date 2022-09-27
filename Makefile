##

# ((github))
# http形式	https://github.com/tohrusaitoh/recp.git
# ssh形式	git@github.com:tohrusaitoh/recp.git
# original	https://tsaitoh.net/~t-saitoh/recp/

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

shopping.db:	sampleG-itemlist.sql	\
		sampleG-userlist.sql	\
		sampleG-buylist.sql
		bash sampleG.sh
clean:;		rm -f *.db

2022-recp:	../2022-10-recp/2022-10-01-recp-1.zip
		#../2022-10-recp/2022-10-08-recp-2.zip	\
		#../2022-10-recp/2022-10-22-recp-3.zip	\
		#../2022-10-recp/2022-10-29-recp-4.zip

../2022-10-recp/2022-10-01-recp-1.zip:	README.md index.php \
		sample0.html sample1.html sample2.css sample2.html \
		documents/2022-10-01-recp-1.pptx documents/2022-10-01-recp-1.pdf 
	zip ../2022-10-recp/2022-10-01-recp-1.zip	$^

		
