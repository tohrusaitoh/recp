DATE := $(shell date +%Y/%m/%d)

all:
	echo nothing

commit:
	git commit -m $(DATE)

push:
	git push origin main
