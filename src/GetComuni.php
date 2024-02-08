<? php
/* -------------------------------------------------------------------
  GET COMUNI
      dati due input; 
	- codice cap 
	- token
      estraggo i dati se 
	1. l'utente è autorizzato
	2. non ha superato le 200 chiamate al giorno
-------------------------------------------------------------------*/
/*
TRY

-- Accesso al DB

-- Verifica Token

	[0K]
		-- Verifica limiti uso API 

		[0K]

			-- Cerca CAP su view "tutto"

			-- Rispondi JSON
		[Ko]

			-- Rispondi errore limite uso dati giornaliero

	[Ko]

		-- Rispondi errore TOKEN non autorizzato

CATCH

	-- Rispondi errore SINTASSI/USO/ECC
*/