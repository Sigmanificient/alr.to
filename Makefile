SRV = /srv/http

server:
	rm -rf $(SRV)/*
	cp -r server/* $(SRV)

.PHONY: server