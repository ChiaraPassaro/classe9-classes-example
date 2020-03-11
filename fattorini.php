<!-- azienda trasporti con fattorino -->
ordini
  private id
  private Cliente
  private DipendenteId
  private peso
  private dataConsegna
  private dataAccettazione
  private fattorinoId
  private destinazione
  private partenza
  __construct(Cliente, DipendenteId, destinazione, partenza, dataConsegna, peso)
  getId()
  setId(id) // non puoi andare avanti se l'id non è un numero
  getCliente()
  setCliente(Cliente) //non funziona se non hai passato un oggetto Cliente
  ...

Mezzo
  portata
  costoCarburante
  __construct(portata, costoCarburante)
  costoKM(km)

Cliente
  nome
  cognome
  indirizzoFatturazione
  CF
  PIVA

Dipendente
  nome
  cognome
  indirizzo
  cf
  id


  impiegatoAmministrazione
   ruolo

  fattorino
    mezzo
