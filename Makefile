variant1: 
	docker run --rm -v ${PWD}/src/:/src/ php:7.4-alpine php /src/variant1.php

variant2: 
	docker run --rm -v ${PWD}/src/:/src/ php:7.4-alpine php /src/variant2.php

variant3: 
	docker run --rm -v ${PWD}/src/:/src/ php:7.4-alpine php /src/variant3.php