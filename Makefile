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

2022-recp:	../2022-10-recp/2022-10-01-recp-1.zip	\
		../2022-10-recp/2022-10-08-recp-2.zip	\
		../2022-10-recp/2022-10-22-recp-3.zip

../2022-10-recp/2022-10-01-recp-1.zip:	README.md index.php \
		sample0.html sample1.html sample2.css sample2.html \
		documents/2022-10-01-recp-1.pptx documents/2022-10-01-recp-1.pdf 
	zip ../2022-10-recp/2022-10-01-recp-1.zip	$^

../2022-10-recp/2022-10-08-recp-2.zip:	README.md index.php \
		sample3.html sample4.html sample5.html sample6.html sample6-answer.html	\
		sample3-2.html sample3-2.js sample3-3.html sample3-4.html	\
		sample7.html sample8.html sample9.html sample9-answer.html	\
		sampleA.html sampleA.css sampleB.html sampleB2.html		\
		sampleC.html sampleC.json sampleC2.html				\
		documents/2022-10-08-recp-2.pptx documents/2022-10-08-recp-2.pdf
	zip ../2022-10-recp/2022-10-08-recp-2.zip	$^ jquery/*

../2022-10-recp/2022-10-22-recp-3.zip:	README.md index.php		\
		sampleD.php sampleD-table.php sampleD-table-answer.php	\
		sampleE.php sampleF.php					\
		sampleH.php sampleI.php sampleJ.php sampleK.html	\
		shopping.db	\
		documents/2022-10-22-recp-3.pptx documents/2022-10-22-recp-3.pdf
	zip ../2022-10-recp/2022-10-22-recp-3.zip	$^
