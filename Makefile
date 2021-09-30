DATE := $(shell date +%Y/%m/%d)

files = sample1.html \
	# sample2.html sample2.css

add:;		git add $(files)
commit:;	git commit -m $(DATE)
push:;		git push origin main
pull:;		git pull origin main
