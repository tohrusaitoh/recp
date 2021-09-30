DATE := $(shell date +%Y/%m/%d)
HOSTNAME := $(shell hostname)

files = sample1.html \
	# sample2.html sample2.css

add:;		git add $(files)
commit:;	git commit -m $(DATE)-$(HOSTNAME)
push:;		git push origin main
pull:;		git pull origin main
