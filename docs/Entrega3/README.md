# Bases-De-Datos-71-78
Link página: https://codd.ing.puc.cl/~grupo71/


## Supuestos 
Para crear los nombres de usuario se hicieron los siguientes supuestos:
- Los nombres de usuario tanto de artistas como de productoras no necesariamente son alfanuméricos.
- La productoras de distintos países comparten usuario (el mismo para todas)
- Dado que hay entradas de cortesía que no están presentes en los datos de entradas del grupo par, en la consulta en que se solicita que se desplieguen por categoría se muestran todas las entradas pertenecientes a dicho evento.


## Navegación ⛵
En general la navegación es intuitiva y se puede guiar por el nombre de los botones, pero hay una excepción. En la navegación de la página de productoras, en todas las consultas se debe regresar con la flecha de retroceso del navegador puesto que no poseen un botón _Volver_. Aun así, cuando se realiza un filtrado en cualquiera de las consultas sí aparece un botón _Volver_ que lleva de regreso a la página principal de navgación.

## Usuarios 👥
La creación de los nombres y sus contraseñas se implementó mediante PHP, el código para ello se encuentra en el archivo `usuarios_db.php`(dentro de la carpeta usuarios)

### Asignación de contraseñas 🔐
Para generar las contraseñas se utilizó una función que escoge 8 caracteres aleatoriamente de una string con letras en mayúscula y minúscula, así como números del 1 al 9 (inclusive); esta fue obtenida de este [link](https://stackoverflow.com/questions/6101956/generating-a-random-password-in-php)

### Creación de nombres de usuario 📝
Para la generación de los nombres de usuario primero se hace una query selecciona todos los **artistas**, se recorre el resultado de ella y para cada artista toma su nombre_escenico, convierte los caracteres en mínúscula (si es necesario) y elimina los espacios, luego se genera su contraseña y se inserta en la tabla de usuarios (ya creada) junto con el tipo de usuario que en este caso es artista.

Tras ello se hace lo mismo para las **productoras**, lo único que cambia es que el nombre de la productora, se reemplazan los espacios por guiones bajo y en tipo_usario se coloca productora.

Al final del archivo se encuentra la tabla con los usuarios y toda su información.

## Usuarios y contraseñas📌 
|id |                  nombre                 | contrasena | tipo_usuario|
|---|-----------------------------------------|------------|-------------|
|1  | duki                                    | LbXSOM4y   | artista     |
|2  | backstreetboys                          | quzQtzO2   | artista     |
|3  | michaeljackson                          | gxApJXHa   | artista     |
|4  | monlaferte                              | d83lpwEu   | artista     |
|5  | khea                                    | cOeSGLgK   | artista     |
|6  | jasonderulo                             | 8jkhlCnT   | artista     |
|7  | pinkfloyd                               | uOkcbmXv   | artista     |
|8  | drake                                   | 3Jpulks3   | artista     |
|9  | nickyjam                                | HICXpnjb   | artista     |
|10 | lolaindigo                              | 8Xq49Map   | artista     |
|11 | Ñengoflow                               | bRDXPVOQ   | artista     |
|12 | bigtimerush                             | X0yTCRn5   | artista     |
|13 | eltonjohn                               | CFPNOMF8   | artista     |
|14 | paulolondra                             | pqD0UrJu   | artista     |
|15 | mariabecerra                            | bd5ee3Ed   | artista     |
|16 | iggyazalea                              | AIjdbrM8   | artista     |
|17 | danielcaesar                            | MEo3FRf8   | artista     |
|18 | relsb                                   | xcMSnXWs   | artista     |
|19 | feid                                    | b3AD5YYV   | artista     |
|20 | rollingstones                           | xDgLIOW5   | artista     |
|21 | princeroyce                             | ZBf31EvH   | artista     |
|22 | jbalvin                                 | U52bkJTF   | artista     |
|23 | camilacabello                           | qzHMkBWh   | artista     |
|24 | tiagopzk                                | HohuOspM   | artista     |
|25 | rosalia                                 | kF08uIn3   | artista     |
|26 | santaferia                              | 0XnvXX29   | artista     |
|27 | drefquila                               | bmecU01g   | artista     |
|28 | gepe                                    | nR5t3fdk   | artista     |
|29 | maskedwolf                              | 2pUrdmiu   | artista     |
|30 | kesha                                   | zh45EemS   | artista     |
|31 | billieeilish                            | 2pAkQdrJ   | artista     |
|32 | sodastereo                              | i4doRPY7   | artista     |
|33 | twice                                   | aOQonTcD   | artista     |
|34 | belinda                                 | OCn2Xcfy   | artista     |
|35 | jonasbrothers                           | xQKEk1tU   | artista     |
|36 | oliviarodrigo                           | jgqa37tC   | artista     |
|37 | emilia                                  | o0ObyWAc   | artista     |
|38 | redhotchilipeppers                      | vDOb3zCr   | artista     |
|39 | sebastianyatra                          | HZ0KL6qE   | artista     |
|40 | ac/dc                                   | 4YeQ3u9h   | artista     |
|41 | nickyromero                             | KWaif4yi   | artista     |
|42 | beckyg                                  | cQeQGHQW   | artista     |
|43 | martingarrix                            | pTDoCW5U   | artista     |
|44 | morat                                   | VYOq1Q8l   | artista     |
|45 | cazzu                                   | mBNntzO1   | artista     |
|46 | djsnake                                 | m6HgtTSY   | artista     |
|47 | maluma                                  | qKHD19Fo   | artista     |
|48 | franciscavalenzuela                     | 53lAjuJo   | artista     |
|49 | coldplay                                | VAUz2HGm   | artista     |
|50 | afrojack                                | HEfnoYJJ   | artista     |
|51 | farruko                                 | 2L7Jykp5   | artista     |
|52 | hardwell                                | 2Yvn9b0N   | artista     |
|53 | avicii                                  | SRfmRlN1   | artista     |
|54 | daftpunk                                | D0H5vXpu   | artista     |
|55 | sansmith                                | UoXAhs8Y   | artista     |
|56 | mabel                                   | e1v4fuP5   | artista     |
|57 | lewiscapaldi                            | qs4G2wTR   | artista     |
|58 | tinistoessel                            | bZAJFruh   | artista     |
|59 | imaginedragons                          | vCPeSEqK   | artista     |
|60 | zayn                                    | KSrQewWn   | artista     |
|61 | rbd                                     | S1EQVWSh   | artista     |
|62 | nattinatasha                            | 48tkOgYF   | artista     |
|63 | beberexha                               | jW3NPjUY   | artista     |
|64 | tiesto                                  | HhcjG5hf   | artista     |
|65 | pearljam                                | jfrOoVRP   | artista     |
|66 | steveaoki                               | i62nMmLl   | artista     |
|67 | dualipa                                 | BhTpwGqP   | artista     |
|68 | brunomars                               | 2yYirIBv   | artista     |
|69 | javieramena                             | nTvFfftX   | artista     |
|70 | ritaora                                 | AvqhRg71   | artista     |
|71 | denisserossenthal                       | rZntdHVv   | artista     |
|72 | khalid                                  | cSuBazKf   | artista     |
|73 | mecano                                  | 9EZL7KwY   | artista     |
|74 | demilovato                              | QReaCx5P   | artista     |
|75 | eminem                                  | lAsIKY5h   | artista     |
|76 | luarlal                                 | HhutSDmc   | artista     |
|77 | romeosantos                             | YNBaWgNx   | artista     |
|78 | zedd                                    | OI0Vv2zm   | artista     |
|79 | aerosmith                               | SVB9vjZs   | artista     |
|80 | eagles                                  | 61fO8RTI   | artista     |
|81 | beegees                                 | 2RpELUSe   | artista     |
|82 | niallhoran                              | bZPu0o3i   | artista     |
|83 | abba                                    | iEu7Qh63   | artista     |
|84 | edsheeran                               | ZZgRKwuv   | artista     |
|85 | rihanna                                 | gqqnus00   | artista     |
|86 | sech                                    | 0ShY5tHU   | artista     |
|87 | rauwalejando                            | fqP4zNLf   | artista     |
|88 | marshmello                              | 03UKybRp   | artista     |
|89 | 5secondsofsummer                        | 1GUnOnDV   | artista     |
|90 | alanwalker                              | kVvVZTZz   | artista     |
|91 | dimitrivegas                            | 4tMnX81R   | artista     |
|92 | hansen                                  | 9ed89Ce7   | artista     |
|93 | ladygaga                                | WOvXpUmE   | artista     |
|94 | fitopaez                                | icyxWUaP   | artista     |
|95 | kygo                                    | mZmINMgX   | artista     |
|96 | paramore                                | gkuOoniZ   | artista     |
|97 | blackpink                               | rqltv9pv   | artista     |
|98 | trueno                                  | o0sJph38   | artista     |
|99 | tatemcrae                               | Xl7dHr9R   | artista     |
|100| duncanlaurence                          | l37fsOA9   | artista     |
|101| megantrainor                            | SjSvJk2L   | artista     |
|102| cirquedusolei                           | M5Zurz8g   | artista     |
|103| madonna                                 | pNoFydx0   | artista     |
|104| themartinezbrothers                     | gtxsaB3X   | artista     |
|105| beele                                   | QvmfCeeS   | artista     |
|106| manuelturizo                            | urB1j6wd   | artista     |
|107| swedishhousemafia                       | mYHeSd1U   | artista     |
|108| jamesarthur                             | Oc07l7zF   | artista     |
|109| arminvanbuuren                          | jy8HWJya   | artista     |
|110| chrisbrown                              | d6JzU4js   | artista     |
|111| sza                                     | KnXuOmzN   | artista     |
|112| harrystyles                             | ScKlZDD9   | artista     |
|113| gustavocerati                           | 2EyjCCUO   | artista     |
|114| princesaalba                            | NzjG2nuf   | artista     |
|115| bonjovi                                 | aX5XN4Cn   | artista     |
|116| conangray                               | d1WHy8Bk   | artista     |
|117| nickinicole                             | RW1gRwYu   | artista     |
|118| badbunny                                | FL3kxGRw   | artista     |
|119| elliegowlding                           | 2xoLtaGi   | artista     |
|120| losprisioneros                          | c3owl0N5   | artista     |
|121| jenniferlopez                           | bumP0A6b   | artista     |
|122| samsmith                                | H4qEdGnt   | artista     |
|123| ozuna                                   | Il83i0Hr   | artista     |
|124| kudai                                   | yLWRMy47   | artista     |
|125| pailita                                 | TziDOVkZ   | artista     |
|126| jessiej                                 | hv8Bw8s0   | artista     |
|127| polimawestcoast                         | QN22aBKu   | artista     |
|128| diplo                                   | aFkQsFBW   | artista     |
|129| anitta                                  | JK665dNa   | artista     |
|130| katyperry                               | jSmp5AU2   | artista     |
|131| a7s                                     | gN2Ctgmr   | artista     |
|132| lanadelrey                              | ictxXW1T   | artista     |
|133| r3hab                                   | rMIVBYIV   | artista     |
|134| justinbieber                            | 7KkuYlOM   | artista     |
|135| karolg                                  | mo7Vr5Rr   | artista     |
|136| louistomlinson                          | NudLKTPG   | artista     |
|137| wisin&yandel                            | 4yPOxWXM   | artista     |
|138| nathypeluso                             | fi2ugvL0   | artista     |
|139| postmalone                              | X1l7lMNb   | artista     |
|140| ctangana                                | pK4itHAT   | artista     |
|141| exo                                     | q0a5jtlU   | artista     |
|142| taylorswift                             | VHcwGS0N   | artista     |
|143| jordan23                                | qPjCyUei   | artista     |
|144| blackeyedpeas                           | 9TrWck6j   | artista     |
|145| onedirection                            | esZimCfh   | artista     |
|146| kanyewest                               | v1L4bPzQ   | artista     |
|147| robinschulz                             | 8KevYBGf   | artista     |
|148| maroon5                                 | psOEt19h   | artista     |
|149| oasis                                   | 8xXOlByp   | artista     |
|150| sia                                     | lQsaLZpb   | artista     |
|151| daddyyankee                             | A3TfHYo1   | artista     |
|152| elalfa                                  | FHgSptb0   | artista     |
|153| cami                                    | HIkE8FLK   | artista     |
|154| tool                                    | lMOKFnrF   | artista     |
|155| alesso                                  | rP2q8q2K   | artista     |
|156| wos                                     | I1Fd6dGF   | artista     |
|157| mileycyrus                              | OCknAgVY   | artista     |
|158| selenagomez                             | 8ZqdLY8L   | artista     |
|159| palomamami                              | 9knNaixO   | artista     |
|160| lostres                                 | Pz2IR48d   | artista     |
|161| theweeknd                               | CZlmfEnN   | artista     |
|162| shakira                                 | UKrm0Tlp   | artista     |
|163| travisscott                             | Yl80QHJX   | artista     |
|164| betocuevas                              | MHZ9iJD6   | artista     |
|165| newkidsontheblock                       | 9fXfyT1i   | artista     |
|166| beyonce                                 | zunsMmxT   | artista     |
|167| majorlazer                              | isZ9bp2J   | artista     |
|168| camilo                                  | 41shFh6C   | artista     |
|169| snow                                    | YKqyP0WZ   | artista     |
|170| bts                                     | MbyPOFT7   | artista     |
|171| bigbang                                 | oksOeZxh   | artista     |
|172| calvinharris                            | tP586eJR   | artista     |
|173| onerepublic                             | wvqxXJ7j   | artista     |
|174| marcianeke                              | 076Nika3   | artista     |
|175| dojacat                                 | m0nS1dHp   | artista     |
|176| laliesposito                            | Pcr8K9ab   | artista     |
|177| queen                                   | QDS9emlt   | artista     |
|178| quevedo                                 | KKa95fky   | artista     |
|179| davidguetta                             | X1l3Ex8B   | artista     |
|180| u2                                      | kAmsfN4k   | artista     |
|181| reik                                    | gnznZubg   | artista     |
|182| andersonpaak                            | 5IlQvTXU   | artista     |
|183| thebeatles                              | t6n3HU0c   | artista     |
|184| laley                                   | wLOKCZSJ   | artista     |
|185| mychemicalromance                       | qKjpo2eJ   | artista     |
|186| cardib                                  | 6fXVwAg9   | artista     |
|187| anuelaa                                 | DgEtQfX7   | artista     |
|188| skrillex                                | CpqcHLw4   | artista     |
|189| radiohead                               | TfRDXeKm   | artista     |
|190| crismj                                  | fBlpp1Jd   | artista     |
|191| charlygarcia                            | JZmh8tTI   | artista     |
|192| arianagrande                            | OViJy382   | artista     |
|193| pablochill-e                            | wV1B1k3n   | artista     |
|194| shawnmendes                             | BDHRr7po   | artista     |
|195| wizkhalifa                              | xh7vdCTQ   | artista     |
|196| laorejadevangogh                        | RuZxLLRk   | artista     |
|197| bizarrap                                | vZ6tz8dR   | artista     |
|198| nickiminaj                              | 1rxEEuMo   | artista     |
|199| camila                                  | Mb7da6SA   | artista     |
|200| mercedessosa                            | n60iAvrZ   | artista     |
|201| estadium_luna_park_                     | 6iL7Qldg   | productora  |
|202| mayam_producciones                      | UeklPiLb   | productora  |
|203| glovox_producciones_limitada            | FLbDHqD2   | productora  |
|204| producciones_baltimore                  | rePra86F   | productora  |
|205| lotus_festival_s.a.                     | mP7kO7dp   | productora  |
|206| venue_hire_sydney                       | giCstctG   | productora  |
|207| padrao_bull_prime                       | c2J9BRHr   | productora  |
|208| top_bruselas                            | Vv9yCxhM   | productora  |
|209| eveerlast_productions_inc.              | VJhtEFzw   | productora  |
|210| kahnevents_gmbh                         | 4wD1AyM2   | productora  |
|211| palermo_films_s.a._                     | h3aSMgFM   | productora  |
|212| expat                                   | YTgGO6IH   | productora  |
|213| revelation                              | li5HDQf1   | productora  |
|214| virtualia_(productora_de_eventos)       | LJQBjmAp   | productora  |
|215| palma_y_compania_limitada               | K6Iz7Eoe   | productora  |
|216| av_company                              | IRGnBnli   | productora  |
|217| sinstress_eventos                       | Cg3RH1PC   | productora  |
|218| actitud_creaciones                      | ponjWsRb   | productora  |
|219| beone_-_entertainment_limitada          | jWLrT0eC   | productora  |
|220| cucarro_producciones_limitada           | 8iXOOBbe   | productora  |
|221| prospero_producciones_                  | i7IM5gm3   | productora  |
|222| dg_medios_y_espectaculos_s.a.           | 0gC9ygdE   | productora  |
|223| mca                                     | k7hM1xAR   | productora  |
|224| multimusica_s.a.                        | 0t7MWI9Q   | productora  |
|225| el_vasco_producciones_                  | NdjlCGb8   | productora  |
|226| centro_eventos_torres_de_paine          | AGCQtDYK   | productora  |
|227| b+d_events                              | EdRy6JXo   | productora  |
|228| productora_chile_espectaculos           | jaEgPVGw   | productora  |
|229| global_journey                          | jBrYkZ4p   | productora  |
|230| gj_comunicaciones                       | VsrZBDfK   | productora  |
|231| letsgo_company                          | RKzr7i0U   | productora  |
|232| atomic_films                            | 2SOM9cJ5   | productora  |
|233| rot_entertainment                       | xpK5YP4o   | productora  |
|234| lotus_sonar_spa                         | 9OMbWQJV   | productora  |
|235| xceed                                   | xFJHg3Nz   | productora  |
|236| wow.cl                                  | SaF4cr6l   | productora  |
|237| urban_music                             | ClI86q2G   | productora  |
|238| grupo_previa_s.a.                       | 3lG3oA7C   | productora  |
|239| top_brand                               | t6Fyro5L   | productora  |
|240| trimade_eventos_limitada                | mgl7uGW6   | productora  |
|241| lotus_producciones_limitada             | 74mMTA1n   | productora  |
|242| ee_-_servicio_de_eventos                | R2t8NYJW   | productora  |
|243| eventos_f.c                             | GBESxPqW   | productora  |
|244| ethno_nueva_zelanda                     | LUgQJ6AI   | productora  |
|245| energika_eventos_limitada               | cT2WRIU9   | productora  |
|246| arte3                                   | XVmWkmPL   | productora  |
|247| latitud_music_spa                       | 8MoAhQ60   | productora  |
|248| german_norambuena_y_cia_ltda            | GxDmaKD7   | productora  |
|249| privadate                               | Zw9Hp2Pl   | productora  |
|250| k_producciones_s.a.                     | TCv9NFxn   | productora  |
|251| productora_energy_in_motion_limitada    | wtkCEyTy   | productora  |
|252| eventos_flores_y_padilla_limitada       | W8UGUjJn   | productora  |
|253| centro_de_eventos_dona_sofia            | fCAEkEs3   | productora  |
|254| fullevent.de                            | Hw2W6cDO   | productora  |
|255| x_producciones                          | kz1nqTES   | productora  |
|256| piedra_mala_producciones_               | JGJXA4pY   | productora  |
|257| eventveranstalter_hamburg               | wxGwEr0A   | productora  |
|258| nachhaltige_events                      | o95PVj9F   | productora  |
|259| cultura_ciudadana                       | ghKpS8e0   | productora  |
|260| eventlocations_munchen                  | FGG23XLO   | productora  |
|261| lino_patalano_                          | HPx4FaIv   | productora  |
|262| medios_y_contenidos_producciones_       | r2ZdtA6c   | productora  |
|263| onlygroundmusic                         | 9HrBMukh   | productora  |
|264| productora_dreams_pro_limitada          | oLOLSZWJ   | productora  |
|265| audio_level_eventos                     | gkNS4Nlc   | productora  |
|266| manatua.nz                              | nw282L6V   | productora  |
|267| globscorp                               | 7gbNomVt   | productora  |
|268| aeg                                     | be7zXkGQ   | productora  |
|269| canada_eventos                          | zmrgveWV   | productora  |
|270| leading_event_agency                    | cVkeXQzE   | productora  |
|271| colors_producciones_limitada            | ry2NKbyj   | productora  |
|272| nikkita_producciones_spa                | XlNCMckY   | productora  |
|273| soc_giacaman_y_cia_ltda                 | 1Ztnbiaf   | productora  |
|274| contenidos_y_entretenimientos_s.a._     | lEcUqzG1   | productora  |
|275| k_international_                        | 2J4ydS6L   | productora  |
|276| bizarro_producciones_limitada           | y8KRPCK1   | productora  |
|277| eventos_y_producciones_evolucion_s.a    | HEOtMsow   | productora  |
|278| ultrabeatman_entretenimiento_puro       | qF6snAcd   | productora  |
|279| centro_de_convenciones_santiago_s.a.    | 4oq1IRVZ   | productora  |
|280| lets_dance                              | DkW59DMs   | productora  |
|281| atipica_                                | tY7PgPFI   | productora  |
|282| fmg_producciones_                       | jjdCu2LT   | productora  |
|283| bierlinerin                             | 1EWAgToQ   | productora  |
|284| artes_y_eventos_internacionales_s.a._   | ZyUmg3Fi   | productora  |
|285| eventseye                               | HgZzFTCX   | productora  |
|286| grandes_eventos                         | 235itkNQ   | productora  |
|287| vision_world_producciones_limitada      | cqNEYcoc   | productora  |
|288| ye_&_ca_producciones_                   | jfR47LTS   | productora  |
|289| ariel_diwan_producciones_s.r.l._        | ADjpHf39   | productora  |
|290| chocolate_stage_s.a.                    | pgbWYHYJ   | productora  |
|291| tonicas_producciones_                   | BQVaJZzy   | productora  |
|292| compañía_argentina_de_sueños_           | V2TARkoi   | productora  |
|293| csi_dmc                                 | W8AMdf2O   | productora  |
|294| aguero_producciones_limitada            | ITivMhlk   | productora  |
|295| comercial_audio_tec_limitada            | PNw1Edas   | productora  |
|296| dedalo_producciones                     | 91ZRszrJ   | productora  |
|297| ck_events_germany                       | zrWqDwNo   | productora  |
|298| blao                                    | TcP0C93L   | productora  |
|299| club_de_la_union                        | WEnglFcr   | productora  |
|300| md+                                     | dtwny5Sb   | productora  |
|301| onanof_producciones_limitada            | OcCDL5yg   | productora  |
|302| avant_garde_rp                          | MREEV0H5   | productora  |
|303| event_hire_sydney                       | Ldl7Rd9l   | productora  |
|304| ramasso_productora                      | JghsZdsV   | productora  |
|305| as_relaciones_publicas                  | h4jsd79m   | productora  |
|306| reverb_-_productora_de_eventos          | beOnhtiu   | productora  |
|307| tyg_eventos_y_producciones              | g3So3eAi   | productora  |
|308| universal_circus                        | duHg1VaX   | productora  |
|309| hispagenda                              | pvS749jn   | productora  |
|310| sony_music_entertainment_chile_s.a.     | OGjiGUsl   | productora  |
|311| global_producciones_spa                 | tA04tG2s   | productora  |
|312| comercial_caupolican_limitada           | bbvo3Yyb   | productora  |
|313| merci_entertainment_spa                 | cI2Ulk6r   | productora  |
|314| hartmann_studios                        | HtpDKbE1   | productora  |
|315| capsule_producciones_spa                | W2N3TVsx   | productora  |
|316| andeschimp_spa                          | FgLXVW02   | productora  |
|317| tolten_eventos                          | VF1Tj4qr   | productora  |
|318| somosfk                                 | EJe9gd1K   | productora  |
|319| mouro_producciones                      | lG4FUMgs   | productora  |
|320| horwath_productions_inc.                | oBtbZvJM   | productora  |
|321| blackgaton                              | W2sDYTXF   | productora  |
|322| millie_millgate                         | CMtJEAMt   | productora  |
|323| eventos_luis_maturana_ortega_e.i.r.l    | RYwPRUdm   | productora  |
|324| andres_gardeweg_producciones_e.i.r.l    | vC2NHIYs   | productora  |
|325| ap_eventos                              | ClyfOfJR   | productora  |
|326| ditecsur                                | Eq8nDAxD   | productora  |
|327| event_production_company                | cRWn5E8R   | productora  |
|328| el_trebol                               | WGpwV1cU   | productora  |
|329| dives_eirl_-_productora_de_evento       | HcG9cWCE   | productora  |
|330| casa_eventos                            | 9DWEi6Iu   | productora  |
|331| agencia_360                             | aNc22h4M   | productora  |
|332| fg_producciones                         | j21zl4fN   | productora  |
|333| factor_eventos                          | rqvUMHqW   | productora  |
|334| t4f_entretenimientos_argentina_         | p3OyIdvM   | productora  |
|335| grus_                                   | tBVKU1Ph   | productora  |
|336| comercial_cueto_balmaceda_limitada      | nFf5iXUW   | productora  |
|337| glamour                                 | DihPu6FW   | productora  |
|338| bdd_producciones                        | WAxpP5B3   | productora  |
|339| indyrock                                | gr6iV2F6   | productora  |
|340| torres_petronas_spa                     | SWLbdGvC   | productora  |
|341| ibolele_producciones                    | G3JbpzzS   | productora  |
|342| productora_babilonia_limitada           | qaJ5TDol   | productora  |
|343| gl_events                               | guRrwtea   | productora  |
|344| ozono_&_piedra_mala_producciones_       | Nqly5fZc   | productora  |
|345| iragons_party                           | AnZCzQ4H   | productora  |
|346| gn_producciones                         | rkwSAjRC   | productora  |
|347| rocko_saroni_eventos                    | qdzJyKdt   | productora  |
|348| huma_producciones                       | WXDSfjQR   | productora  |
|349| la_crypta_s.a._                         | FQGlw4JO   | productora  |
|350| sociedad_comercial_mk_pro_limitada      | HkYZ1UZ0   | productora  |
|351| yataco                                  | kQWAY9hh   | productora  |
|352| wlaceventos                             | qcy2sot0   | productora  |
|353| backstage_rockstore_s.a.                | 5LE3DTya   | productora  |
|354| eventos_toronto_shaddai                 | lUtEGo1p   | productora  |
|355| kibon_video                             | lcvypDVp   | productora  |
|356| cmg_audio_visual                        | PzI7ldoF   | productora  |
|357| ecopass                                 | 3vN1ByIr   | productora  |
|358| charco_booking_spa                      | sbiN0LSc   | productora  |
|359| recreo_producciones_spa                 | M3RjeQlJ   | productora  |
|360| espectaculos_gallo_                     | uOtmtgXz   | productora  |
|361| eventos_comunidad_ombligo_limitada      | Z6DrWzSV   | productora  |
|362| litmind                                 | PDYo6HeN   | productora  |
|363| dnj_producciones                        | p5nO3jIk   | productora  |
|364| eventos_mudness_limitada                | AUQamydZ   | productora  |
|365| the_imagos                              | QUrZwVjp   | productora  |
|366| meta_proyectos_sa                       | v3SnO8Cp   | productora  |
|367| carlos_lopez_vega_productora_de_eventos | pG8tZvth   | productora  |
|368| productora_de_eventos_moviefan_limitada | HoERmkeS   | productora  |
|369| yellow_house                            | VIRdpswA   | productora  |
|370| bautrip                                 | hcb6RZNE   | productora  |
|371| sono_producciones_limitada              | z6qjtjHz   | productora  |
|372| animationphoenix                        | UW7lPeuW   | productora  |
|373| europages                               | NiuauEqT   | productora  |
|374| preludio_producciones_s.a._             | xSOwiSdf   | productora  |
|375| g_&_t_business_group_spa                | wCofGE73   | productora  |
|376| agosin_eventos                          | kWPRirJP   | productora  |
|377| alva_producciones_ltda                  | YnloAovg   | productora  |
|378| live_nation                             | Zl2rNLfx   | productora  |
|379| feg_entretenimientos_                   | ehTIPF8S   | productora  |
|380| bafochi_ltda                            | VPSWFsI4   | productora  |
|381| cream_entertainment_group_spa           | gVtIHOj5   | productora  |
|382| brasil_stands                           | w0gwuuoT   | productora  |
|383| el_magno_producciones_s.r.l._           | tLV98lKm   | productora  |
|384| event_management_nz                     | DSdqAeez   | productora  |
|385| sonnica_producciones                    | eqw2fRi4   | productora  |
|386| freedom_eventos                         | 5afoMloa   | productora  |
|387| ais_producciones                        | gFIfDuMe   | productora  |
|388| los_angeles_av_production               | ncLb5Bvb   | productora  |
|389| un_plan_producciones_                   | hcTdv0IB   | productora  |
|390| club_providencia                        | ddcBVoTH   | productora  |
|391| centro_de_eventos_aravena_malloco       | t8Mo42D1   | productora  |
|392| your_dream                              | WYRjk1hD   | productora  |
|393| producciones_oz_limitada                | rTT9zVQQ   | productora  |
|394| dreams_-_eventos                        | y4BFMGeb   | productora  |
|395| 903                                     | 2rsDyiCn   | productora  |
|396| planet_events                           | mPPdrzBQ   | productora  |
|397| sydney_worldpride                       | wnrUbhiy   | productora  |
|398| alto_la_torre                           | xZo2Ij8s   | productora  |
|399| corral_y_asociados_limitada             | YJeqbdMq   | productora  |
|400| sach_producciones_y_eventos_limitada    | dO5nYvxN   | productora  |
|401| rove.me                                 | j8aoyQfN   | productora  |
|402| entretenciones_jovi_limitada            | BGrrQ3dG   | productora  |
|403| entertainment_group                     | nlJ5qu2I   | productora  |
|404| producciones_walter_beat                | 9t470LKA   | productora  |
|405| mundo_epika                             | o7uvrzwn   | productora  |
|406| janos_eventos                           | x6HpqyQ0   | productora  |
|407| apparcel_producciones_limitada          | IwNwlSBW   | productora  |
|408| youtooproject                           | BIpsOfPY   | productora  |
|409| weise_y_asociados_limitada              | HwBFON8K   | productora  |
|410| street_machine_producciones_s.a.        | uNEDBEWI   | productora  |
|411| brl_eventos                             | TkeaOSiD   | productora  |
|412| time_for_fun_(t4f)                      | JHIfa0Rb   | productora  |
|413| mgc                                     | BtuMqhVW   | productora  |
|414| noix_producciones_limitada              | kveOMel7   | productora  |
|415| efeunodos                               | 0dgbyhBD   | productora  |
|416| queenstown_event_company                | LHxHfP6H   | productora  |
|417| carpas_karen_ltda                       | Azu9AlXc   | productora  |