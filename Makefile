SRV = /srv/http

server:
	rm -rf $(SRV)/*
	cp -r server/* $(SRV)
	cp server/.env $(SRV)

.PHONY: server